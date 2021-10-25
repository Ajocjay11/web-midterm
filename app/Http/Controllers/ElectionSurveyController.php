<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateElectionSurveyRequest;
use App\Http\Requests\UpdateElectionSurveyRequest;
use App\Repositories\ElectionSurveyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ElectionSurveyController extends AppBaseController
{
    /** @var  ElectionSurveyRepository */
    private $electionSurveyRepository;

    public function __construct(ElectionSurveyRepository $electionSurveyRepo)
    {
        $this->electionSurveyRepository = $electionSurveyRepo;
    }

    /**
     * Display a listing of the ElectionSurvey.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $electionSurveys = $this->electionSurveyRepository->all();

        return view('election_surveys.index')
            ->with('electionSurveys', $electionSurveys);
    }

    /**
     * Show the form for creating a new ElectionSurvey.
     *
     * @return Response
     */
    public function create()
    {
        return view('election_surveys.create');
    }

    /**
     * Store a newly created ElectionSurvey in storage.
     *
     * @param CreateElectionSurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateElectionSurveyRequest $request)
    {
        $input = $request->all();

        $electionSurvey = $this->electionSurveyRepository->create($input);

        Flash::success('Election Survey saved successfully.');

        return redirect(route('electionSurveys.index'));
    }

    /**
     * Display the specified ElectionSurvey.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $electionSurvey = $this->electionSurveyRepository->find($id);

        if (empty($electionSurvey)) {
            Flash::error('Election Survey not found');

            return redirect(route('electionSurveys.index'));
        }

        return view('election_surveys.show')->with('electionSurvey', $electionSurvey);
    }

    /**
     * Show the form for editing the specified ElectionSurvey.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $electionSurvey = $this->electionSurveyRepository->find($id);

        if (empty($electionSurvey)) {
            Flash::error('Election Survey not found');

            return redirect(route('electionSurveys.index'));
        }

        return view('election_surveys.edit')->with('electionSurvey', $electionSurvey);
    }

    /**
     * Update the specified ElectionSurvey in storage.
     *
     * @param int $id
     * @param UpdateElectionSurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateElectionSurveyRequest $request)
    {
        $electionSurvey = $this->electionSurveyRepository->find($id);

        if (empty($electionSurvey)) {
            Flash::error('Election Survey not found');

            return redirect(route('electionSurveys.index'));
        }

        $electionSurvey = $this->electionSurveyRepository->update($request->all(), $id);

        Flash::success('Election Survey updated successfully.');

        return redirect(route('electionSurveys.index'));
    }

    /**
     * Remove the specified ElectionSurvey from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $electionSurvey = $this->electionSurveyRepository->find($id);

        if (empty($electionSurvey)) {
            Flash::error('Election Survey not found');

            return redirect(route('electionSurveys.index'));
        }

        $this->electionSurveyRepository->delete($id);

        Flash::success('Election Survey deleted successfully.');

        return redirect(route('electionSurveys.index'));
    }
}
