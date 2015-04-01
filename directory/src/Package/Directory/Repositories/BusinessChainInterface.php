<?php namespace Package\Directory\Repositories;

interface BusinessChainInterface{
	/**
	 * Business Chains
	 * @param  get, add, update, delete
	 * @return [type]                    [description]
	 */
	public function getBusinessChainById($bussness_chain_id);

	public function createBusinessChain();

	public function updateBusinessChain($bussness_chain_id);

	public function deleteBusinessChain($bussness_chain_id);

	/**
	 * Business Listing
	 * @param get, add, update, delete
	 * @return [type] [description]
	 */
	public function getBusinessByID($bussness_id);

	public function createBusiness();

	public function editBusiness($bussness_id);

	public function updateBusiness($bussness_id);

	public function deleteBusiness($bussness_id);

}