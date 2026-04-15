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
 * CreateBatchInformationExtractionTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行合同智能提取的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行合同智能提取的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getResourceIds() 获取<p>合同智能提取的文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF、WORD、PNG、JPEG文件资源编号。</p><p>注意：</p><ul><li>此接口仅支持5个文件发起</li><li>PDF、WORD文件限制在10M以内</li><li>PNG、JPEG文件限制在5M以内</li></ul>
 * @method void setResourceIds(array $ResourceIds) 设置<p>合同智能提取的文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF、WORD、PNG、JPEG文件资源编号。</p><p>注意：</p><ul><li>此接口仅支持5个文件发起</li><li>PDF、WORD文件限制在10M以内</li><li>PNG、JPEG文件限制在5M以内</li></ul>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getFieldTemplateId() 获取<p>用户配置的合同智能提取字段模板ID，会基于此模板批量创建合同智能提取任务，为32位字符串。<br><a href="https://qcloudimg.tencent-cloud.cn/raw/99008608577532423ea437c7fdbedca1.png">点击查看模板Id在控制台上的位置</a></p><p>注:  <code>此配置优先级最高，设置了模板ID后Fields配置就会无效</code></p>
 * @method void setFieldTemplateId(string $FieldTemplateId) 设置<p>用户配置的合同智能提取字段模板ID，会基于此模板批量创建合同智能提取任务，为32位字符串。<br><a href="https://qcloudimg.tencent-cloud.cn/raw/99008608577532423ea437c7fdbedca1.png">点击查看模板Id在控制台上的位置</a></p><p>注:  <code>此配置优先级最高，设置了模板ID后Fields配置就会无效</code></p>
 * @method array getFields() 获取<p>用于合同智能提取的字段信息。</p><p>注意：<code>字段模板优先级最高，如果设置了FieldTemplateId值，此配置就无效</code></p>
 * @method void setFields(array $Fields) 设置<p>用于合同智能提取的字段信息。</p><p>注意：<code>字段模板优先级最高，如果设置了FieldTemplateId值，此配置就无效</code></p>
 */
class CreateBatchInformationExtractionTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行合同智能提取的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>合同智能提取的文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF、WORD、PNG、JPEG文件资源编号。</p><p>注意：</p><ul><li>此接口仅支持5个文件发起</li><li>PDF、WORD文件限制在10M以内</li><li>PNG、JPEG文件限制在5M以内</li></ul>
     */
    public $ResourceIds;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>用户配置的合同智能提取字段模板ID，会基于此模板批量创建合同智能提取任务，为32位字符串。<br><a href="https://qcloudimg.tencent-cloud.cn/raw/99008608577532423ea437c7fdbedca1.png">点击查看模板Id在控制台上的位置</a></p><p>注:  <code>此配置优先级最高，设置了模板ID后Fields配置就会无效</code></p>
     */
    public $FieldTemplateId;

    /**
     * @var array <p>用于合同智能提取的字段信息。</p><p>注意：<code>字段模板优先级最高，如果设置了FieldTemplateId值，此配置就无效</code></p>
     */
    public $Fields;

    /**
     * @param UserInfo $Operator <p>执行合同智能提取的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $ResourceIds <p>合同智能提取的文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF、WORD、PNG、JPEG文件资源编号。</p><p>注意：</p><ul><li>此接口仅支持5个文件发起</li><li>PDF、WORD文件限制在10M以内</li><li>PNG、JPEG文件限制在5M以内</li></ul>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $FieldTemplateId <p>用户配置的合同智能提取字段模板ID，会基于此模板批量创建合同智能提取任务，为32位字符串。<br><a href="https://qcloudimg.tencent-cloud.cn/raw/99008608577532423ea437c7fdbedca1.png">点击查看模板Id在控制台上的位置</a></p><p>注:  <code>此配置优先级最高，设置了模板ID后Fields配置就会无效</code></p>
     * @param array $Fields <p>用于合同智能提取的字段信息。</p><p>注意：<code>字段模板优先级最高，如果设置了FieldTemplateId值，此配置就无效</code></p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FieldTemplateId",$param) and $param["FieldTemplateId"] !== null) {
            $this->FieldTemplateId = $param["FieldTemplateId"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ExtractionField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
