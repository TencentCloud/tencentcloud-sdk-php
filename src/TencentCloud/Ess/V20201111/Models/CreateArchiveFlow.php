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
 * 创建归档合同信息
 *
 * @method array getResourceIds() 获取<p>合同文件的资源id，使用<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a> 上传文件返回resourceId，目前一个合同只能支持一个资源ID。</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>合同文件的资源id，使用<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a> 上传文件返回resourceId，目前一个合同只能支持一个资源ID。</p>
 * @method string getFlowName() 获取<p>合同名称，不传时系统会使用合同资源文件名作为合同名称；最终合同名称不能为空；长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同名称，不传时系统会使用合同资源文件名作为合同名称；最终合同名称不能为空；长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method string getFlowType() 获取<p>合同类型，自定义文本字符串，长度不能超过200。</p>
 * @method void setFlowType(string $FlowType) 设置<p>合同类型，自定义文本字符串，长度不能超过200。</p>
 * @method string getBusinessId() 获取<p>调用方业务系统中的合同业务编号，可以用于外部系统和归档合同做关联，长度不超过 128 字节</p>
 * @method void setBusinessId(string $BusinessId) 设置<p>调用方业务系统中的合同业务编号，可以用于外部系统和归档合同做关联，长度不超过 128 字节</p>
 * @method string getCreatorName() 获取<p>合同发起方/创建人名称，用于归档合同展示和检索，长度不超过 32 字符</p>
 * @method void setCreatorName(string $CreatorName) 设置<p>合同发起方/创建人名称，用于归档合同展示和检索，长度不超过 32 字符</p>
 * @method array getApproverInfo() 获取<p>签署人信息列表，用于记录合同由哪些个人或企业签署，最多 50 个参与者。</p>
 * @method void setApproverInfo(array $ApproverInfo) 设置<p>签署人信息列表，用于记录合同由哪些个人或企业签署，最多 50 个参与者。</p>
 * @method array getCcInfo() 获取<p>关注人信息列表，用于记录合同关注对象，最多 50 个关注者。</p>
 * @method void setCcInfo(array $CcInfo) 设置<p>关注人信息列表，用于记录合同关注对象，最多 50 个关注者。</p>
 * @method string getUserData() 获取<p>调用方自定义透传数据，可用于保存业务扩展信息，长度不超过 20480 字节。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义透传数据，可用于保存业务扩展信息，长度不超过 20480 字节。</p>
 * @method string getFlowDescription() 获取<p>合同描述/备注信息，长度不超过 1000 个字符</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>合同描述/备注信息，长度不超过 1000 个字符</p>
 * @method integer getApproveTime() 获取<p>合同签署完成时间，Unix 秒级时间戳</p>
 * @method void setApproveTime(integer $ApproveTime) 设置<p>合同签署完成时间，Unix 秒级时间戳</p>
 * @method integer getCustomCreatedOn() 获取<p>合同发起时间/合同原始创建时间，Unix 秒级时间戳</p>
 * @method void setCustomCreatedOn(integer $CustomCreatedOn) 设置<p>合同发起时间/合同原始创建时间，Unix 秒级时间戳</p>
 */
class CreateArchiveFlow extends AbstractModel
{
    /**
     * @var array <p>合同文件的资源id，使用<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a> 上传文件返回resourceId，目前一个合同只能支持一个资源ID。</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>合同名称，不传时系统会使用合同资源文件名作为合同名称；最终合同名称不能为空；长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowName;

    /**
     * @var string <p>合同类型，自定义文本字符串，长度不能超过200。</p>
     */
    public $FlowType;

    /**
     * @var string <p>调用方业务系统中的合同业务编号，可以用于外部系统和归档合同做关联，长度不超过 128 字节</p>
     */
    public $BusinessId;

    /**
     * @var string <p>合同发起方/创建人名称，用于归档合同展示和检索，长度不超过 32 字符</p>
     */
    public $CreatorName;

    /**
     * @var array <p>签署人信息列表，用于记录合同由哪些个人或企业签署，最多 50 个参与者。</p>
     */
    public $ApproverInfo;

    /**
     * @var array <p>关注人信息列表，用于记录合同关注对象，最多 50 个关注者。</p>
     */
    public $CcInfo;

    /**
     * @var string <p>调用方自定义透传数据，可用于保存业务扩展信息，长度不超过 20480 字节。</p>
     */
    public $UserData;

    /**
     * @var string <p>合同描述/备注信息，长度不超过 1000 个字符</p>
     */
    public $FlowDescription;

    /**
     * @var integer <p>合同签署完成时间，Unix 秒级时间戳</p>
     */
    public $ApproveTime;

    /**
     * @var integer <p>合同发起时间/合同原始创建时间，Unix 秒级时间戳</p>
     */
    public $CustomCreatedOn;

    /**
     * @param array $ResourceIds <p>合同文件的资源id，使用<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a> 上传文件返回resourceId，目前一个合同只能支持一个资源ID。</p>
     * @param string $FlowName <p>合同名称，不传时系统会使用合同资源文件名作为合同名称；最终合同名称不能为空；长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param string $FlowType <p>合同类型，自定义文本字符串，长度不能超过200。</p>
     * @param string $BusinessId <p>调用方业务系统中的合同业务编号，可以用于外部系统和归档合同做关联，长度不超过 128 字节</p>
     * @param string $CreatorName <p>合同发起方/创建人名称，用于归档合同展示和检索，长度不超过 32 字符</p>
     * @param array $ApproverInfo <p>签署人信息列表，用于记录合同由哪些个人或企业签署，最多 50 个参与者。</p>
     * @param array $CcInfo <p>关注人信息列表，用于记录合同关注对象，最多 50 个关注者。</p>
     * @param string $UserData <p>调用方自定义透传数据，可用于保存业务扩展信息，长度不超过 20480 字节。</p>
     * @param string $FlowDescription <p>合同描述/备注信息，长度不超过 1000 个字符</p>
     * @param integer $ApproveTime <p>合同签署完成时间，Unix 秒级时间戳</p>
     * @param integer $CustomCreatedOn <p>合同发起时间/合同原始创建时间，Unix 秒级时间戳</p>
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("ApproverInfo",$param) and $param["ApproverInfo"] !== null) {
            $this->ApproverInfo = [];
            foreach ($param["ApproverInfo"] as $key => $value){
                $obj = new ArchiveFlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->ApproverInfo, $obj);
            }
        }

        if (array_key_exists("CcInfo",$param) and $param["CcInfo"] !== null) {
            $this->CcInfo = [];
            foreach ($param["CcInfo"] as $key => $value){
                $obj = new ArchiveFlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->CcInfo, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("CustomCreatedOn",$param) and $param["CustomCreatedOn"] !== null) {
            $this->CustomCreatedOn = $param["CustomCreatedOn"];
        }
    }
}
