<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DID列表
 *
 * @method integer getServiceId() 获取服务ID
 * @method void setServiceId(integer $ServiceId) 设置服务ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getDid() 获取did号码
 * @method void setDid(string $Did) 设置did号码
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getAuthorityState() 获取权威机构认证状态 1未注册 2 未认证 3 已认证
 * @method void setAuthorityState(integer $AuthorityState) 设置权威机构认证状态 1未注册 2 未认证 3 已认证
 * @method string getLabelName() 获取DID标签名称
 * @method void setLabelName(string $LabelName) 设置DID标签名称
 * @method string getCreatedAt() 获取DID创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置DID创建时间
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getAllianceName() 获取联盟名称
 * @method void setAllianceName(string $AllianceName) 设置联盟名称
 * @method integer getLabelId() 获取DID标签id
 * @method void setLabelId(integer $LabelId) 设置DID标签id
 */
class DidData extends AbstractModel
{
    /**
     * @var integer 服务ID
     */
    public $ServiceId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string did号码
     */
    public $Did;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 权威机构认证状态 1未注册 2 未认证 3 已认证
     */
    public $AuthorityState;

    /**
     * @var string DID标签名称
     */
    public $LabelName;

    /**
     * @var string DID创建时间
     */
    public $CreatedAt;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string 联盟名称
     */
    public $AllianceName;

    /**
     * @var integer DID标签id
     */
    public $LabelId;

    /**
     * @param integer $ServiceId 服务ID
     * @param integer $GroupId 群组ID
     * @param string $AppName 应用名称
     * @param string $Did did号码
     * @param string $Remark 备注
     * @param integer $AuthorityState 权威机构认证状态 1未注册 2 未认证 3 已认证
     * @param string $LabelName DID标签名称
     * @param string $CreatedAt DID创建时间
     * @param string $ClusterId 网络ID
     * @param string $AllianceName 联盟名称
     * @param integer $LabelId DID标签id
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AuthorityState",$param) and $param["AuthorityState"] !== null) {
            $this->AuthorityState = $param["AuthorityState"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AllianceName",$param) and $param["AllianceName"] !== null) {
            $this->AllianceName = $param["AllianceName"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }
    }
}
