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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateChannelTemplate返回参数结构体
 *
 * @method string getAppId() 获取第三方应用平台的应用ID
 * @method void setAppId(string $AppId) 设置第三方应用平台的应用ID
 * @method string getTemplateId() 获取合同模板ID
 * @method void setTemplateId(string $TemplateId) 设置合同模板ID
 * @method string getOperateResult() 获取描述模板可见性更改的结果。
<ul>
<li>all-success: 全部成功</li>
<li>part-success: 部分成功,失败的会在FailMessageList中展示</li>
<li>fail:全部失败, 失败的会在FailMessageList中展示</li>
</ul>
 * @method void setOperateResult(string $OperateResult) 设置描述模板可见性更改的结果。
<ul>
<li>all-success: 全部成功</li>
<li>part-success: 部分成功,失败的会在FailMessageList中展示</li>
<li>fail:全部失败, 失败的会在FailMessageList中展示</li>
</ul>
 * @method string getAuthTag() 获取模板可见范围:
**all**: 所有本第三方应用合作企业可见
**part**: 指定的本第三方应用合作企业
 * @method void setAuthTag(string $AuthTag) 设置模板可见范围:
**all**: 所有本第三方应用合作企业可见
**part**: 指定的本第三方应用合作企业
 * @method array getProxyOrganizationOpenIds() 获取第三方平台子客企业标识列表，仅在select 模式下返回
 * @method void setProxyOrganizationOpenIds(array $ProxyOrganizationOpenIds) 设置第三方平台子客企业标识列表，仅在select 模式下返回
 * @method array getFailMessageList() 获取操作失败信息数组
 * @method void setFailMessageList(array $FailMessageList) 设置操作失败信息数组
 * @method integer getTotal() 获取授权的平台子企业数量，OperateType 为select 时返回。
 * @method void setTotal(integer $Total) 设置授权的平台子企业数量，OperateType 为select 时返回。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class OperateChannelTemplateResponse extends AbstractModel
{
    /**
     * @var string 第三方应用平台的应用ID
     */
    public $AppId;

    /**
     * @var string 合同模板ID
     */
    public $TemplateId;

    /**
     * @var string 描述模板可见性更改的结果。
<ul>
<li>all-success: 全部成功</li>
<li>part-success: 部分成功,失败的会在FailMessageList中展示</li>
<li>fail:全部失败, 失败的会在FailMessageList中展示</li>
</ul>
     */
    public $OperateResult;

    /**
     * @var string 模板可见范围:
**all**: 所有本第三方应用合作企业可见
**part**: 指定的本第三方应用合作企业
     */
    public $AuthTag;

    /**
     * @var array 第三方平台子客企业标识列表，仅在select 模式下返回
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var array 操作失败信息数组
     */
    public $FailMessageList;

    /**
     * @var integer 授权的平台子企业数量，OperateType 为select 时返回。
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId 第三方应用平台的应用ID
     * @param string $TemplateId 合同模板ID
     * @param string $OperateResult 描述模板可见性更改的结果。
<ul>
<li>all-success: 全部成功</li>
<li>part-success: 部分成功,失败的会在FailMessageList中展示</li>
<li>fail:全部失败, 失败的会在FailMessageList中展示</li>
</ul>
     * @param string $AuthTag 模板可见范围:
**all**: 所有本第三方应用合作企业可见
**part**: 指定的本第三方应用合作企业
     * @param array $ProxyOrganizationOpenIds 第三方平台子客企业标识列表，仅在select 模式下返回
     * @param array $FailMessageList 操作失败信息数组
     * @param integer $Total 授权的平台子企业数量，OperateType 为select 时返回。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("OperateResult",$param) and $param["OperateResult"] !== null) {
            $this->OperateResult = $param["OperateResult"];
        }

        if (array_key_exists("AuthTag",$param) and $param["AuthTag"] !== null) {
            $this->AuthTag = $param["AuthTag"];
        }

        if (array_key_exists("ProxyOrganizationOpenIds",$param) and $param["ProxyOrganizationOpenIds"] !== null) {
            $this->ProxyOrganizationOpenIds = $param["ProxyOrganizationOpenIds"];
        }

        if (array_key_exists("FailMessageList",$param) and $param["FailMessageList"] !== null) {
            $this->FailMessageList = [];
            foreach ($param["FailMessageList"] as $key => $value){
                $obj = new AuthFailMessage();
                $obj->deserialize($value);
                array_push($this->FailMessageList, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
