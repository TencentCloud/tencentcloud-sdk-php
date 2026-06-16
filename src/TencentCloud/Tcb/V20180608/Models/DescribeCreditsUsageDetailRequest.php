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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCreditsUsageDetail请求参数结构体
 *
 * @method array getModules() 获取<p>模块列表</p><p>枚举值：</p><ul><li>FLEXDB： 文档数据库</li><li>TDSQL： MYSQL数据库</li><li>SCF： 云函数</li><li>AI： 大模型</li><li>EKS： 云托管</li><li>COS： 云存储</li><li>HOSTING： 静态托管</li><li>Auth： 用户权限</li><li>APIInvocation： API调用</li><li>HTTPInvocation： HTTP调用</li><li>VM： 主机</li><li>Workflow： 工作流</li><li>Other： 其他</li><li>PostgreSQL： PostgreSQL</li><li>Token： Token</li></ul>
 * @method void setModules(array $Modules) 设置<p>模块列表</p><p>枚举值：</p><ul><li>FLEXDB： 文档数据库</li><li>TDSQL： MYSQL数据库</li><li>SCF： 云函数</li><li>AI： 大模型</li><li>EKS： 云托管</li><li>COS： 云存储</li><li>HOSTING： 静态托管</li><li>Auth： 用户权限</li><li>APIInvocation： API调用</li><li>HTTPInvocation： HTTP调用</li><li>VM： 主机</li><li>Workflow： 工作流</li><li>Other： 其他</li><li>PostgreSQL： PostgreSQL</li><li>Token： Token</li></ul>
 * @method string getStartDate() 获取<p>开始日期</p>
 * @method void setStartDate(string $StartDate) 设置<p>开始日期</p>
 * @method string getEndDate() 获取<p>结束日期</p>
 * @method void setEndDate(string $EndDate) 设置<p>结束日期</p>
 * @method boolean getNeedUsageDetails() 获取<p>是否需要每日用量明细</p>
 * @method void setNeedUsageDetails(boolean $NeedUsageDetails) 设置<p>是否需要每日用量明细</p>
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 */
class DescribeCreditsUsageDetailRequest extends AbstractModel
{
    /**
     * @var array <p>模块列表</p><p>枚举值：</p><ul><li>FLEXDB： 文档数据库</li><li>TDSQL： MYSQL数据库</li><li>SCF： 云函数</li><li>AI： 大模型</li><li>EKS： 云托管</li><li>COS： 云存储</li><li>HOSTING： 静态托管</li><li>Auth： 用户权限</li><li>APIInvocation： API调用</li><li>HTTPInvocation： HTTP调用</li><li>VM： 主机</li><li>Workflow： 工作流</li><li>Other： 其他</li><li>PostgreSQL： PostgreSQL</li><li>Token： Token</li></ul>
     */
    public $Modules;

    /**
     * @var string <p>开始日期</p>
     */
    public $StartDate;

    /**
     * @var string <p>结束日期</p>
     */
    public $EndDate;

    /**
     * @var boolean <p>是否需要每日用量明细</p>
     */
    public $NeedUsageDetails;

    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @param array $Modules <p>模块列表</p><p>枚举值：</p><ul><li>FLEXDB： 文档数据库</li><li>TDSQL： MYSQL数据库</li><li>SCF： 云函数</li><li>AI： 大模型</li><li>EKS： 云托管</li><li>COS： 云存储</li><li>HOSTING： 静态托管</li><li>Auth： 用户权限</li><li>APIInvocation： API调用</li><li>HTTPInvocation： HTTP调用</li><li>VM： 主机</li><li>Workflow： 工作流</li><li>Other： 其他</li><li>PostgreSQL： PostgreSQL</li><li>Token： Token</li></ul>
     * @param string $StartDate <p>开始日期</p>
     * @param string $EndDate <p>结束日期</p>
     * @param boolean $NeedUsageDetails <p>是否需要每日用量明细</p>
     * @param string $EnvId <p>环境id</p>
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
        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("NeedUsageDetails",$param) and $param["NeedUsageDetails"] !== null) {
            $this->NeedUsageDetails = $param["NeedUsageDetails"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
