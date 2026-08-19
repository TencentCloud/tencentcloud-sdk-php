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
 * 风险趋势
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getPort() 获取端口数
 * @method void setPort(integer $Port) 设置端口数
 * @method integer getVUL() 获取漏洞数
 * @method void setVUL(integer $VUL) 设置漏洞数
 * @method integer getWeakPassword() 获取弱口令数
 * @method void setWeakPassword(integer $WeakPassword) 设置弱口令数
 * @method integer getWebsite() 获取网站数
 * @method void setWebsite(integer $Website) 设置网站数
 * @method integer getCFG() 获取配置数
 * @method void setCFG(integer $CFG) 设置配置数
 * @method integer getServer() 获取测绘风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(integer $Server) 设置测绘风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCFG() 获取主机风险配置数量
 * @method void setHostCFG(integer $HostCFG) 设置主机风险配置数量
 * @method integer getPodCFG() 获取容器基线风险配置数量
 * @method void setPodCFG(integer $PodCFG) 设置容器基线风险配置数量
 */
class RiskCenterOverviewTrendAnalysis extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 端口数
     */
    public $Port;

    /**
     * @var integer 漏洞数
     */
    public $VUL;

    /**
     * @var integer 弱口令数
     */
    public $WeakPassword;

    /**
     * @var integer 网站数
     */
    public $Website;

    /**
     * @var integer 配置数
     */
    public $CFG;

    /**
     * @var integer 测绘风险数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var integer 主机风险配置数量
     */
    public $HostCFG;

    /**
     * @var integer 容器基线风险配置数量
     */
    public $PodCFG;

    /**
     * @param string $Date 日期
     * @param integer $Port 端口数
     * @param integer $VUL 漏洞数
     * @param integer $WeakPassword 弱口令数
     * @param integer $Website 网站数
     * @param integer $CFG 配置数
     * @param integer $Server 测绘风险数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCFG 主机风险配置数量
     * @param integer $PodCFG 容器基线风险配置数量
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VUL",$param) and $param["VUL"] !== null) {
            $this->VUL = $param["VUL"];
        }

        if (array_key_exists("WeakPassword",$param) and $param["WeakPassword"] !== null) {
            $this->WeakPassword = $param["WeakPassword"];
        }

        if (array_key_exists("Website",$param) and $param["Website"] !== null) {
            $this->Website = $param["Website"];
        }

        if (array_key_exists("CFG",$param) and $param["CFG"] !== null) {
            $this->CFG = $param["CFG"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("HostCFG",$param) and $param["HostCFG"] !== null) {
            $this->HostCFG = $param["HostCFG"];
        }

        if (array_key_exists("PodCFG",$param) and $param["PodCFG"] !== null) {
            $this->PodCFG = $param["PodCFG"];
        }
    }
}
