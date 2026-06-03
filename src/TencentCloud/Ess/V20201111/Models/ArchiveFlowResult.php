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
 * 归档合同结果
 *
 * @method string getFlowId() 获取<p>归档合同id</p>
 * @method void setFlowId(string $FlowId) 设置<p>归档合同id</p>
 * @method integer getArchiveFlowStatus() 获取<p>合同处理结果</p><p>枚举值：</p><ul><li>0： 成功</li><li>1： 失败</li></ul>
 * @method void setArchiveFlowStatus(integer $ArchiveFlowStatus) 设置<p>合同处理结果</p><p>枚举值：</p><ul><li>0： 成功</li><li>1： 失败</li></ul>
 * @method string getBusinessId() 获取<p>业务自定义id</p>
 * @method void setBusinessId(string $BusinessId) 设置<p>业务自定义id</p>
 * @method array getResourceIdList() 获取<p>资源ID列表</p>
 * @method void setResourceIdList(array $ResourceIdList) 设置<p>资源ID列表</p>
 * @method string getErrorMessage() 获取<p>错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
 */
class ArchiveFlowResult extends AbstractModel
{
    /**
     * @var string <p>归档合同id</p>
     */
    public $FlowId;

    /**
     * @var integer <p>合同处理结果</p><p>枚举值：</p><ul><li>0： 成功</li><li>1： 失败</li></ul>
     */
    public $ArchiveFlowStatus;

    /**
     * @var string <p>业务自定义id</p>
     */
    public $BusinessId;

    /**
     * @var array <p>资源ID列表</p>
     */
    public $ResourceIdList;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @param string $FlowId <p>归档合同id</p>
     * @param integer $ArchiveFlowStatus <p>合同处理结果</p><p>枚举值：</p><ul><li>0： 成功</li><li>1： 失败</li></ul>
     * @param string $BusinessId <p>业务自定义id</p>
     * @param array $ResourceIdList <p>资源ID列表</p>
     * @param string $ErrorMessage <p>错误信息</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ArchiveFlowStatus",$param) and $param["ArchiveFlowStatus"] !== null) {
            $this->ArchiveFlowStatus = $param["ArchiveFlowStatus"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
