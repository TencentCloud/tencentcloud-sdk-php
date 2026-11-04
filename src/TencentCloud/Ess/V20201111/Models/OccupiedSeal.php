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
 * @method string getSealId() 获取<p>电子印章编号</p>
 * @method void setSealId(string $SealId) 设置<p>电子印章编号</p>
 * @method string getSealName() 获取<p>电子印章名称</p>
 * @method void setSealName(string $SealName) 设置<p>电子印章名称</p>
 * @method integer getCreateOn() 获取<p>电子印章授权时间戳，单位秒</p>
 * @method void setCreateOn(integer $CreateOn) 设置<p>电子印章授权时间戳，单位秒</p>
 * @method string getCreator() 获取<p>电子印章授权人的UserId</p>
 * @method void setCreator(string $Creator) 设置<p>电子印章授权人的UserId</p>
 * @method string getSealPolicyId() 获取<p>电子印章策略Id</p>
 * @method void setSealPolicyId(string $SealPolicyId) 设置<p>电子印章策略Id</p>
 * @method string getSealStatus() 获取<p>印章状态</p><p>枚举值：</p><ul><li>CHECKING： 待审核</li><li>SUCCESS： 启用状态</li><li>FAIL： 审核拒绝</li><li>DISABLE： 已停用</li><li>STOPPED： 已终止</li><li>VOID： 已作废</li><li>INVALID： 已失效</li><li>CHECKING-SADM： 待超管审核</li></ul>
 * @method void setSealStatus(string $SealStatus) 设置<p>印章状态</p><p>枚举值：</p><ul><li>CHECKING： 待审核</li><li>SUCCESS： 启用状态</li><li>FAIL： 审核拒绝</li><li>DISABLE： 已停用</li><li>STOPPED： 已终止</li><li>VOID： 已作废</li><li>INVALID： 已失效</li><li>CHECKING-SADM： 待超管审核</li></ul>
 * @method string getFailReason() 获取<p>审核失败原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>审核失败原因</p>
 * @method string getUrl() 获取<p>印章图片url，5分钟内有效</p>
 * @method void setUrl(string $Url) 设置<p>印章图片url，5分钟内有效</p>
 * @method string getSealType() 获取<p>印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章</p>
 * @method void setSealType(string $SealType) 设置<p>印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章</p>
 * @method boolean getIsAllTime() 获取<p>用印申请是否为永久授权，true-是，false-否</p>
 * @method void setIsAllTime(boolean $IsAllTime) 设置<p>用印申请是否为永久授权，true-是，false-否</p>
 * @method array getAuthorizedUsers() 获取<p>授权人列表</p>
 * @method void setAuthorizedUsers(array $AuthorizedUsers) 设置<p>授权人列表</p>
 * @method ExtendScene getExtendScene() 获取<p>印章扩展数据信息</p>
 * @method void setExtendScene(ExtendScene $ExtendScene) 设置<p>印章扩展数据信息</p>
 * @method integer getRealWidth() 获取<p>印章的真实宽度，单位毫米</p>
 * @method void setRealWidth(integer $RealWidth) 设置<p>印章的真实宽度，单位毫米</p>
 * @method integer getRealHeight() 获取<p>印章的真实高度，单位毫米</p>
 * @method void setRealHeight(integer $RealHeight) 设置<p>印章的真实高度，单位毫米</p>
 * @method string getSubSealType() 获取<p>自定义子类型印章</p>
 * @method void setSubSealType(string $SubSealType) 设置<p>自定义子类型印章</p>
 * @method string getSubSealName() 获取<p>自定义子类型印章名称</p>
 * @method void setSubSealName(string $SubSealName) 设置<p>自定义子类型印章名称</p>
 * @method string getSealDescription() 获取<p>印章描述</p>
 * @method void setSealDescription(string $SealDescription) 设置<p>印章描述</p>
 */
class OccupiedSeal extends AbstractModel
{
    /**
     * @var string <p>电子印章编号</p>
     */
    public $SealId;

    /**
     * @var string <p>电子印章名称</p>
     */
    public $SealName;

    /**
     * @var integer <p>电子印章授权时间戳，单位秒</p>
     */
    public $CreateOn;

    /**
     * @var string <p>电子印章授权人的UserId</p>
     */
    public $Creator;

    /**
     * @var string <p>电子印章策略Id</p>
     */
    public $SealPolicyId;

    /**
     * @var string <p>印章状态</p><p>枚举值：</p><ul><li>CHECKING： 待审核</li><li>SUCCESS： 启用状态</li><li>FAIL： 审核拒绝</li><li>DISABLE： 已停用</li><li>STOPPED： 已终止</li><li>VOID： 已作废</li><li>INVALID： 已失效</li><li>CHECKING-SADM： 待超管审核</li></ul>
     */
    public $SealStatus;

    /**
     * @var string <p>审核失败原因</p>
     */
    public $FailReason;

    /**
     * @var string <p>印章图片url，5分钟内有效</p>
     */
    public $Url;

    /**
     * @var string <p>印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章</p>
     */
    public $SealType;

    /**
     * @var boolean <p>用印申请是否为永久授权，true-是，false-否</p>
     */
    public $IsAllTime;

    /**
     * @var array <p>授权人列表</p>
     */
    public $AuthorizedUsers;

    /**
     * @var ExtendScene <p>印章扩展数据信息</p>
     */
    public $ExtendScene;

    /**
     * @var integer <p>印章的真实宽度，单位毫米</p>
     */
    public $RealWidth;

    /**
     * @var integer <p>印章的真实高度，单位毫米</p>
     */
    public $RealHeight;

    /**
     * @var string <p>自定义子类型印章</p>
     */
    public $SubSealType;

    /**
     * @var string <p>自定义子类型印章名称</p>
     */
    public $SubSealName;

    /**
     * @var string <p>印章描述</p>
     */
    public $SealDescription;

    /**
     * @param string $SealId <p>电子印章编号</p>
     * @param string $SealName <p>电子印章名称</p>
     * @param integer $CreateOn <p>电子印章授权时间戳，单位秒</p>
     * @param string $Creator <p>电子印章授权人的UserId</p>
     * @param string $SealPolicyId <p>电子印章策略Id</p>
     * @param string $SealStatus <p>印章状态</p><p>枚举值：</p><ul><li>CHECKING： 待审核</li><li>SUCCESS： 启用状态</li><li>FAIL： 审核拒绝</li><li>DISABLE： 已停用</li><li>STOPPED： 已终止</li><li>VOID： 已作废</li><li>INVALID： 已失效</li><li>CHECKING-SADM： 待超管审核</li></ul>
     * @param string $FailReason <p>审核失败原因</p>
     * @param string $Url <p>印章图片url，5分钟内有效</p>
     * @param string $SealType <p>印章类型,OFFICIAL-企业公章, CONTRACT-合同专用章,ORGANIZATIONSEAL-企业印章(本地上传印章类型),LEGAL_PERSON_SEAL-法人印章</p>
     * @param boolean $IsAllTime <p>用印申请是否为永久授权，true-是，false-否</p>
     * @param array $AuthorizedUsers <p>授权人列表</p>
     * @param ExtendScene $ExtendScene <p>印章扩展数据信息</p>
     * @param integer $RealWidth <p>印章的真实宽度，单位毫米</p>
     * @param integer $RealHeight <p>印章的真实高度，单位毫米</p>
     * @param string $SubSealType <p>自定义子类型印章</p>
     * @param string $SubSealName <p>自定义子类型印章名称</p>
     * @param string $SealDescription <p>印章描述</p>
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

        if (array_key_exists("RealWidth",$param) and $param["RealWidth"] !== null) {
            $this->RealWidth = $param["RealWidth"];
        }

        if (array_key_exists("RealHeight",$param) and $param["RealHeight"] !== null) {
            $this->RealHeight = $param["RealHeight"];
        }

        if (array_key_exists("SubSealType",$param) and $param["SubSealType"] !== null) {
            $this->SubSealType = $param["SubSealType"];
        }

        if (array_key_exists("SubSealName",$param) and $param["SubSealName"] !== null) {
            $this->SubSealName = $param["SubSealName"];
        }

        if (array_key_exists("SealDescription",$param) and $param["SealDescription"] !== null) {
            $this->SealDescription = $param["SealDescription"];
        }
    }
}
