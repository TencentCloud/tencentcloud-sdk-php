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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixedHostDetail返回参数结构体
 *
 * @method string getVulName() 获取<p>漏洞名称</p>
 * @method void setVulName(string $VulName) 设置<p>漏洞名称</p>
 * @method string getCveId() 获取<p>CVE编号</p>
 * @method void setCveId(string $CveId) 设置<p>CVE编号</p>
 * @method string getVulCategory() 获取<p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞</p>
 * @method void setVulCategory(string $VulCategory) 设置<p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞</p>
 * @method string getFixTime() 获取<p>修复完成时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setFixTime(string $FixTime) 设置<p>修复完成时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getInstanceId() 获取<p>主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机实例ID</p>
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getPublicIp() 获取<p>主机公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置<p>主机公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取<p>主机内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>主机内网IP</p>
 * @method array getComponentDetails() 获取<p>关联组件&amp;路径详情列表</p>
 * @method void setComponentDetails(array $ComponentDetails) 设置<p>关联组件&amp;路径详情列表</p>
 * @method integer getTotalCount() 获取<p>关联组件&amp;路径总数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>关联组件&amp;路径总数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulFixedHostDetailResponse extends AbstractModel
{
    /**
     * @var string <p>漏洞名称</p>
     */
    public $VulName;

    /**
     * @var string <p>CVE编号</p>
     */
    public $CveId;

    /**
     * @var string <p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞</p>
     */
    public $VulCategory;

    /**
     * @var string <p>修复完成时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $FixTime;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>主机公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string <p>主机内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var array <p>关联组件&amp;路径详情列表</p>
     */
    public $ComponentDetails;

    /**
     * @var integer <p>关联组件&amp;路径总数量</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VulName <p>漏洞名称</p>
     * @param string $CveId <p>CVE编号</p>
     * @param string $VulCategory <p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞</p>
     * @param string $FixTime <p>修复完成时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $InstanceId <p>主机实例ID</p>
     * @param string $MachineName <p>主机名称</p>
     * @param string $PublicIp <p>主机公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp <p>主机内网IP</p>
     * @param array $ComponentDetails <p>关联组件&amp;路径详情列表</p>
     * @param integer $TotalCount <p>关联组件&amp;路径总数量</p>
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("FixTime",$param) and $param["FixTime"] !== null) {
            $this->FixTime = $param["FixTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ComponentDetails",$param) and $param["ComponentDetails"] !== null) {
            $this->ComponentDetails = [];
            foreach ($param["ComponentDetails"] as $key => $value){
                $obj = new ComponentDetailItem();
                $obj->deserialize($value);
                array_push($this->ComponentDetails, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
