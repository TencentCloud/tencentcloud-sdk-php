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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddressTemplateList返回参数结构体
 *
 * @method integer getTotal() 获取<p>模板总数</p>
 * @method void setTotal(integer $Total) 设置<p>模板总数</p>
 * @method array getData() 获取<p>模板列表数据</p>
 * @method void setData(array $Data) 设置<p>模板列表数据</p>
 * @method array getNameList() 获取<p>模板名称列表</p>
 * @method void setNameList(array $NameList) 设置<p>模板名称列表</p>
 * @method integer getIpTemplateCount() 获取<p>Ip地址模板数量</p>
 * @method void setIpTemplateCount(integer $IpTemplateCount) 设置<p>Ip地址模板数量</p>
 * @method integer getDomainTemplateCount() 获取<p>域名地址模板数量</p>
 * @method void setDomainTemplateCount(integer $DomainTemplateCount) 设置<p>域名地址模板数量</p>
 * @method integer getPortTemplateCount() 获取<p>协议端口模板数量</p>
 * @method void setPortTemplateCount(integer $PortTemplateCount) 设置<p>协议端口模板数量</p>
 * @method integer getUsedTemplateCount() 获取<p>已使用的地址模板数</p>
 * @method void setUsedTemplateCount(integer $UsedTemplateCount) 设置<p>已使用的地址模板数</p>
 * @method integer getTemplateQuotaCount() 获取<p>地址模板配额数量</p>
 * @method void setTemplateQuotaCount(integer $TemplateQuotaCount) 设置<p>地址模板配额数量</p>
 * @method integer getTkeTemplateCount() 获取<p>容器服务地址模板数量</p>
 * @method void setTkeTemplateCount(integer $TkeTemplateCount) 设置<p>容器服务地址模板数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAddressTemplateListResponse extends AbstractModel
{
    /**
     * @var integer <p>模板总数</p>
     */
    public $Total;

    /**
     * @var array <p>模板列表数据</p>
     */
    public $Data;

    /**
     * @var array <p>模板名称列表</p>
     */
    public $NameList;

    /**
     * @var integer <p>Ip地址模板数量</p>
     */
    public $IpTemplateCount;

    /**
     * @var integer <p>域名地址模板数量</p>
     */
    public $DomainTemplateCount;

    /**
     * @var integer <p>协议端口模板数量</p>
     */
    public $PortTemplateCount;

    /**
     * @var integer <p>已使用的地址模板数</p>
     */
    public $UsedTemplateCount;

    /**
     * @var integer <p>地址模板配额数量</p>
     */
    public $TemplateQuotaCount;

    /**
     * @var integer <p>容器服务地址模板数量</p>
     */
    public $TkeTemplateCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>模板总数</p>
     * @param array $Data <p>模板列表数据</p>
     * @param array $NameList <p>模板名称列表</p>
     * @param integer $IpTemplateCount <p>Ip地址模板数量</p>
     * @param integer $DomainTemplateCount <p>域名地址模板数量</p>
     * @param integer $PortTemplateCount <p>协议端口模板数量</p>
     * @param integer $UsedTemplateCount <p>已使用的地址模板数</p>
     * @param integer $TemplateQuotaCount <p>地址模板配额数量</p>
     * @param integer $TkeTemplateCount <p>容器服务地址模板数量</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TemplateListInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("NameList",$param) and $param["NameList"] !== null) {
            $this->NameList = $param["NameList"];
        }

        if (array_key_exists("IpTemplateCount",$param) and $param["IpTemplateCount"] !== null) {
            $this->IpTemplateCount = $param["IpTemplateCount"];
        }

        if (array_key_exists("DomainTemplateCount",$param) and $param["DomainTemplateCount"] !== null) {
            $this->DomainTemplateCount = $param["DomainTemplateCount"];
        }

        if (array_key_exists("PortTemplateCount",$param) and $param["PortTemplateCount"] !== null) {
            $this->PortTemplateCount = $param["PortTemplateCount"];
        }

        if (array_key_exists("UsedTemplateCount",$param) and $param["UsedTemplateCount"] !== null) {
            $this->UsedTemplateCount = $param["UsedTemplateCount"];
        }

        if (array_key_exists("TemplateQuotaCount",$param) and $param["TemplateQuotaCount"] !== null) {
            $this->TemplateQuotaCount = $param["TemplateQuotaCount"];
        }

        if (array_key_exists("TkeTemplateCount",$param) and $param["TkeTemplateCount"] !== null) {
            $this->TkeTemplateCount = $param["TkeTemplateCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
