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
 * CreateHostVulExportJob请求参数结构体
 *
 * @method string getBusinessAction() 获取<p>导出的action</p><p>枚举值：</p><ul><li>LinuxHostVulRiskList： linux漏洞风险列表</li><li>WebCmsHostVulRiskList： WebCms漏洞风险列表</li><li>AppHostVulRiskList： App漏洞风险列表</li><li>EmergencyHostVulRiskList： 紧急漏洞风险列表</li><li>KBRiskList： Windows kb风险列表</li><li>RelateHostList： 关联主机列表</li><li>WhiteList： 漏洞白名单</li></ul>
 * @method void setBusinessAction(string $BusinessAction) 设置<p>导出的action</p><p>枚举值：</p><ul><li>LinuxHostVulRiskList： linux漏洞风险列表</li><li>WebCmsHostVulRiskList： WebCms漏洞风险列表</li><li>AppHostVulRiskList： App漏洞风险列表</li><li>EmergencyHostVulRiskList： 紧急漏洞风险列表</li><li>KBRiskList： Windows kb风险列表</li><li>RelateHostList： 关联主机列表</li><li>WhiteList： 漏洞白名单</li></ul>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>KbID：KB风险关联主机情况下需要额外加入KB风险ID<br>VulID：漏洞风险关联主机情况下需要额外加入vul风险ID</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>KbID：KB风险关联主机情况下需要额外加入KB风险ID<br>VulID：漏洞风险关联主机情况下需要额外加入vul风险ID</p>
 */
class CreateHostVulExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>导出的action</p><p>枚举值：</p><ul><li>LinuxHostVulRiskList： linux漏洞风险列表</li><li>WebCmsHostVulRiskList： WebCms漏洞风险列表</li><li>AppHostVulRiskList： App漏洞风险列表</li><li>EmergencyHostVulRiskList： 紧急漏洞风险列表</li><li>KBRiskList： Windows kb风险列表</li><li>RelateHostList： 关联主机列表</li><li>WhiteList： 漏洞白名单</li></ul>
     */
    public $BusinessAction;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>KbID：KB风险关联主机情况下需要额外加入KB风险ID<br>VulID：漏洞风险关联主机情况下需要额外加入vul风险ID</p>
     */
    public $Filters;

    /**
     * @param string $BusinessAction <p>导出的action</p><p>枚举值：</p><ul><li>LinuxHostVulRiskList： linux漏洞风险列表</li><li>WebCmsHostVulRiskList： WebCms漏洞风险列表</li><li>AppHostVulRiskList： App漏洞风险列表</li><li>EmergencyHostVulRiskList： 紧急漏洞风险列表</li><li>KBRiskList： Windows kb风险列表</li><li>RelateHostList： 关联主机列表</li><li>WhiteList： 漏洞白名单</li></ul>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>KbID：KB风险关联主机情况下需要额外加入KB风险ID<br>VulID：漏洞风险关联主机情况下需要额外加入vul风险ID</p>
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
        if (array_key_exists("BusinessAction",$param) and $param["BusinessAction"] !== null) {
            $this->BusinessAction = $param["BusinessAction"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
