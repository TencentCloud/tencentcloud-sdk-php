<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 持有的电子印章信息
 *
 * @method string getSealId() 获取电子印章编号
 * @method void setSealId(string $SealId) 设置电子印章编号
 * @method string getSealName() 获取电子印章名称
 * @method void setSealName(string $SealName) 设置电子印章名称
 * @method integer getCreateOn() 获取电子印章授权时间戳，单位秒
 * @method void setCreateOn(integer $CreateOn) 设置电子印章授权时间戳，单位秒
 * @method string getCreator() 获取电子印章授权人的UserId
 * @method void setCreator(string $Creator) 设置电子印章授权人的UserId
 * @method string getSealPolicyId() 获取电子印章策略Id
 * @method void setSealPolicyId(string $SealPolicyId) 设置电子印章策略Id
 * @method string getSealStatus() 获取印章状态，有以下六种：CHECKING（审核中）SUCCESS（已启用）FAIL（审核拒绝）CHECKING-SADM（待超管审核）DISABLE（已停用）STOPPED（已终止）
 * @method void setSealStatus(string $SealStatus) 设置印章状态，有以下六种：CHECKING（审核中）SUCCESS（已启用）FAIL（审核拒绝）CHECKING-SADM（待超管审核）DISABLE（已停用）STOPPED（已终止）
 * @method string getFailReason() 获取审核失败原因
 * @method void setFailReason(string $FailReason) 设置审核失败原因
 * @method string getUrl() 获取印章图片url，5分钟内有效
 * @method void setUrl(string $Url) 设置印章图片url，5分钟内有效
 * @method string getSealType() 获取印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章
 * @method void setSealType(string $SealType) 设置印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章
 * @method boolean getIsAllTime() 获取用印申请是否为永久授权，true-是，false-否
 * @method void setIsAllTime(boolean $IsAllTime) 设置用印申请是否为永久授权，true-是，false-否
 * @method array getAuthorizedUsers() 获取授权人列表
 * @method void setAuthorizedUsers(array $AuthorizedUsers) 设置授权人列表
 * @method ExtendScene getExtendScene() 获取印章扩展数据信息
 * @method void setExtendScene(ExtendScene $ExtendScene) 设置印章扩展数据信息
 */
class OccupiedSeal extends AbstractModel
{
    /**
     * @var string 电子印章编号
     */
    public $SealId;

    /**
     * @var string 电子印章名称
     */
    public $SealName;

    /**
     * @var integer 电子印章授权时间戳，单位秒
     */
    public $CreateOn;

    /**
     * @var string 电子印章授权人的UserId
     */
    public $Creator;

    /**
     * @var string 电子印章策略Id
     */
    public $SealPolicyId;

    /**
     * @var string 印章状态，有以下六种：CHECKING（审核中）SUCCESS（已启用）FAIL（审核拒绝）CHECKING-SADM（待超管审核）DISABLE（已停用）STOPPED（已终止）
     */
    public $SealStatus;

    /**
     * @var string 审核失败原因
     */
    public $FailReason;

    /**
     * @var string 印章图片url，5分钟内有效
     */
    public $Url;

    /**
     * @var string 印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章
     */
    public $SealType;

    /**
     * @var boolean 用印申请是否为永久授权，true-是，false-否
     */
    public $IsAllTime;

    /**
     * @var array 授权人列表
     */
    public $AuthorizedUsers;

    /**
     * @var ExtendScene 印章扩展数据信息
     */
    public $ExtendScene;

    /**
     * @param string $SealId 电子印章编号
     * @param string $SealName 电子印章名称
     * @param integer $CreateOn 电子印章授权时间戳，单位秒
     * @param string $Creator 电子印章授权人的UserId
     * @param string $SealPolicyId 电子印章策略Id
     * @param string $SealStatus 印章状态，有以下六种：CHECKING（审核中）SUCCESS（已启用）FAIL（审核拒绝）CHECKING-SADM（待超管审核）DISABLE（已停用）STOPPED（已终止）
     * @param string $FailReason 审核失败原因
     * @param string $Url 印章图片url，5分钟内有效
     * @param string $SealType 印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章
     * @param boolean $IsAllTime 用印申请是否为永久授权，true-是，false-否
     * @param array $AuthorizedUsers 授权人列表
     * @param ExtendScene $ExtendScene 印章扩展数据信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("CreateOn",$param) and $param["CreateOn"] !== null) {
            $this->CreateOn = $param["CreateOn"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("SealPolicyId",$param) and $param["SealPolicyId"] !== null) {
            $this->SealPolicyId = $param["SealPolicyId"];
        }

        if (array_key_exists("SealStatus",$param) and $param["SealStatus"] !== null) {
            $this->SealStatus = $param["SealStatus"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("IsAllTime",$param) and $param["IsAllTime"] !== null) {
            $this->IsAllTime = $param["IsAllTime"];
        }

        if (array_key_exists("AuthorizedUsers",$param) and $param["AuthorizedUsers"] !== null) {
            $this->AuthorizedUsers = [];
            foreach ($param["AuthorizedUsers"] as $key => $value){
                $obj = new AuthorizedUser();
                $obj->deserialize($value);
                array_push($this->AuthorizedUsers, $obj);
            }
        }

        if (array_key_exists("ExtendScene",$param) and $param["ExtendScene"] !== null) {
            $this->ExtendScene = new ExtendScene();
            $this->ExtendScene->deserialize($param["ExtendScene"]);
        }
    }
}
