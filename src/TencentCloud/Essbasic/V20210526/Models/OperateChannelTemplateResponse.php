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
 * @method string getAppId() 获取<p>第三方应用平台的应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>第三方应用平台的应用ID</p>
 * @method string getTemplateId() 获取<p>合同模板ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>合同模板ID</p>
 * @method string getOperateResult() 获取<p>描述模板可见性更改的结果。</p><ul><li>all-success: 全部成功</li><li>part-success: 部分成功,失败的会在FailMessageList中展示</li><li>fail:全部失败, 失败的会在FailMessageList中展示</li></ul>
 * @method void setOperateResult(string $OperateResult) 设置<p>描述模板可见性更改的结果。</p><ul><li>all-success: 全部成功</li><li>part-success: 部分成功,失败的会在FailMessageList中展示</li><li>fail:全部失败, 失败的会在FailMessageList中展示</li></ul>
 * @method string getAuthTag() 获取<p>模板可见范围:<br><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p>
 * @method void setAuthTag(string $AuthTag) 设置<p>模板可见范围:<br><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p>
 * @method array getProxyOrganizationOpenIds() 获取<p>第三方平台子客企业标识列表，仅在select 模式下返回</p>
 * @method void setProxyOrganizationOpenIds(array $ProxyOrganizationOpenIds) 设置<p>第三方平台子客企业标识列表，仅在select 模式下返回</p>
 * @method array getFailMessageList() 获取<p>操作失败信息数组</p>
 * @method void setFailMessageList(array $FailMessageList) 设置<p>操作失败信息数组</p>
 * @method integer getTotal() 获取<p>授权的平台子企业数量，OperateType 为select 时返回。</p>
 * @method void setTotal(integer $Total) 设置<p>授权的平台子企业数量，OperateType 为select 时返回。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class OperateChannelTemplateResponse extends AbstractModel
{
    /**
     * @var string <p>第三方应用平台的应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>合同模板ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>描述模板可见性更改的结果。</p><ul><li>all-success: 全部成功</li><li>part-success: 部分成功,失败的会在FailMessageList中展示</li><li>fail:全部失败, 失败的会在FailMessageList中展示</li></ul>
     */
    public $OperateResult;

    /**
     * @var string <p>模板可见范围:<br><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p>
     */
    public $AuthTag;

    /**
     * @var array <p>第三方平台子客企业标识列表，仅在select 模式下返回</p>
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var array <p>操作失败信息数组</p>
     */
    public $FailMessageList;

    /**
     * @var integer <p>授权的平台子企业数量，OperateType 为select 时返回。</p>
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId <p>第三方应用平台的应用ID</p>
     * @param string $TemplateId <p>合同模板ID</p>
     * @param string $OperateResult <p>描述模板可见性更改的结果。</p><ul><li>all-success: 全部成功</li><li>part-success: 部分成功,失败的会在FailMessageList中展示</li><li>fail:全部失败, 失败的会在FailMessageList中展示</li></ul>
     * @param string $AuthTag <p>模板可见范围:<br><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p>
     * @param array $ProxyOrganizationOpenIds <p>第三方平台子客企业标识列表，仅在select 模式下返回</p>
     * @param array $FailMessageList <p>操作失败信息数组</p>
     * @param integer $Total <p>授权的平台子企业数量，OperateType 为select 时返回。</p>
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
