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
 * 风险中心风险概览统计数据
 *
 * @method integer getPortTotal() 获取端口风险总数
 * @method void setPortTotal(integer $PortTotal) 设置端口风险总数
 * @method integer getPortHighLevel() 获取端口风险高危数量
 * @method void setPortHighLevel(integer $PortHighLevel) 设置端口风险高危数量
 * @method integer getWeakPasswordTotal() 获取	弱口令风险总数
 * @method void setWeakPasswordTotal(integer $WeakPasswordTotal) 设置	弱口令风险总数
 * @method integer getWeakPasswordHighLevel() 获取弱口令风险高危数量
 * @method void setWeakPasswordHighLevel(integer $WeakPasswordHighLevel) 设置弱口令风险高危数量
 * @method integer getWebsiteTotal() 获取网站风险数量
 * @method void setWebsiteTotal(integer $WebsiteTotal) 设置网站风险数量
 * @method integer getWebsiteHighLevel() 获取网站高危风险数量
 * @method void setWebsiteHighLevel(integer $WebsiteHighLevel) 设置网站高危风险数量
 * @method string getLastScanTime() 获取最新的扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最新的扫描时间
 * @method integer getVULTotal() 获取漏洞风险数
 * @method void setVULTotal(integer $VULTotal) 设置漏洞风险数
 * @method integer getVULHighLevel() 获取高危漏洞风险数
 * @method void setVULHighLevel(integer $VULHighLevel) 设置高危漏洞风险数
 * @method integer getCFGTotal() 获取配置项风险数量
 * @method void setCFGTotal(integer $CFGTotal) 设置配置项风险数量
 * @method integer getCFGHighLevel() 获取高危配置项风险数量
 * @method void setCFGHighLevel(integer $CFGHighLevel) 设置高危配置项风险数量
 * @method integer getServerTotal() 获取测绘服务风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerTotal(integer $ServerTotal) 设置测绘服务风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServerHighLevel() 获取测绘服务高危数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerHighLevel(integer $ServerHighLevel) 设置测绘服务高危数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostBaseLineRiskTotal() 获取主机基线风险数量
 * @method void setHostBaseLineRiskTotal(integer $HostBaseLineRiskTotal) 设置主机基线风险数量
 * @method integer getHostBaseLineRiskHighLevel() 获取主机基线高危风险数量
 * @method void setHostBaseLineRiskHighLevel(integer $HostBaseLineRiskHighLevel) 设置主机基线高危风险数量
 * @method integer getPodBaseLineRiskTotal() 获取容器基线风险数量
 * @method void setPodBaseLineRiskTotal(integer $PodBaseLineRiskTotal) 设置容器基线风险数量
 * @method integer getPodBaseLineRiskHighLevel() 获取容器基线高危风险数量
 * @method void setPodBaseLineRiskHighLevel(integer $PodBaseLineRiskHighLevel) 设置容器基线高危风险数量
 */
class CsipRiskCenterStatistics extends AbstractModel
{
    /**
     * @var integer 端口风险总数
     */
    public $PortTotal;

    /**
     * @var integer 端口风险高危数量
     */
    public $PortHighLevel;

    /**
     * @var integer 	弱口令风险总数
     */
    public $WeakPasswordTotal;

    /**
     * @var integer 弱口令风险高危数量
     */
    public $WeakPasswordHighLevel;

    /**
     * @var integer 网站风险数量
     */
    public $WebsiteTotal;

    /**
     * @var integer 网站高危风险数量
     */
    public $WebsiteHighLevel;

    /**
     * @var string 最新的扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 漏洞风险数
     */
    public $VULTotal;

    /**
     * @var integer 高危漏洞风险数
     */
    public $VULHighLevel;

    /**
     * @var integer 配置项风险数量
     */
    public $CFGTotal;

    /**
     * @var integer 高危配置项风险数量
     */
    public $CFGHighLevel;

    /**
     * @var integer 测绘服务风险数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerTotal;

    /**
     * @var integer 测绘服务高危数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerHighLevel;

    /**
     * @var integer 主机基线风险数量
     */
    public $HostBaseLineRiskTotal;

    /**
     * @var integer 主机基线高危风险数量
     */
    public $HostBaseLineRiskHighLevel;

    /**
     * @var integer 容器基线风险数量
     */
    public $PodBaseLineRiskTotal;

    /**
     * @var integer 容器基线高危风险数量
     */
    public $PodBaseLineRiskHighLevel;

    /**
     * @param integer $PortTotal 端口风险总数
     * @param integer $PortHighLevel 端口风险高危数量
     * @param integer $WeakPasswordTotal 	弱口令风险总数
     * @param integer $WeakPasswordHighLevel 弱口令风险高危数量
     * @param integer $WebsiteTotal 网站风险数量
     * @param integer $WebsiteHighLevel 网站高危风险数量
     * @param string $LastScanTime 最新的扫描时间
     * @param integer $VULTotal 漏洞风险数
     * @param integer $VULHighLevel 高危漏洞风险数
     * @param integer $CFGTotal 配置项风险数量
     * @param integer $CFGHighLevel 高危配置项风险数量
     * @param integer $ServerTotal 测绘服务风险数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServerHighLevel 测绘服务高危数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostBaseLineRiskTotal 主机基线风险数量
     * @param integer $HostBaseLineRiskHighLevel 主机基线高危风险数量
     * @param integer $PodBaseLineRiskTotal 容器基线风险数量
     * @param integer $PodBaseLineRiskHighLevel 容器基线高危风险数量
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
        if (array_key_exists("PortTotal",$param) and $param["PortTotal"] !== null) {
            $this->PortTotal = $param["PortTotal"];
        }

        if (array_key_exists("PortHighLevel",$param) and $param["PortHighLevel"] !== null) {
            $this->PortHighLevel = $param["PortHighLevel"];
        }

        if (array_key_exists("WeakPasswordTotal",$param) and $param["WeakPasswordTotal"] !== null) {
            $this->WeakPasswordTotal = $param["WeakPasswordTotal"];
        }

        if (array_key_exists("WeakPasswordHighLevel",$param) and $param["WeakPasswordHighLevel"] !== null) {
            $this->WeakPasswordHighLevel = $param["WeakPasswordHighLevel"];
        }

        if (array_key_exists("WebsiteTotal",$param) and $param["WebsiteTotal"] !== null) {
            $this->WebsiteTotal = $param["WebsiteTotal"];
        }

        if (array_key_exists("WebsiteHighLevel",$param) and $param["WebsiteHighLevel"] !== null) {
            $this->WebsiteHighLevel = $param["WebsiteHighLevel"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("VULTotal",$param) and $param["VULTotal"] !== null) {
            $this->VULTotal = $param["VULTotal"];
        }

        if (array_key_exists("VULHighLevel",$param) and $param["VULHighLevel"] !== null) {
            $this->VULHighLevel = $param["VULHighLevel"];
        }

        if (array_key_exists("CFGTotal",$param) and $param["CFGTotal"] !== null) {
            $this->CFGTotal = $param["CFGTotal"];
        }

        if (array_key_exists("CFGHighLevel",$param) and $param["CFGHighLevel"] !== null) {
            $this->CFGHighLevel = $param["CFGHighLevel"];
        }

        if (array_key_exists("ServerTotal",$param) and $param["ServerTotal"] !== null) {
            $this->ServerTotal = $param["ServerTotal"];
        }

        if (array_key_exists("ServerHighLevel",$param) and $param["ServerHighLevel"] !== null) {
            $this->ServerHighLevel = $param["ServerHighLevel"];
        }

        if (array_key_exists("HostBaseLineRiskTotal",$param) and $param["HostBaseLineRiskTotal"] !== null) {
            $this->HostBaseLineRiskTotal = $param["HostBaseLineRiskTotal"];
        }

        if (array_key_exists("HostBaseLineRiskHighLevel",$param) and $param["HostBaseLineRiskHighLevel"] !== null) {
            $this->HostBaseLineRiskHighLevel = $param["HostBaseLineRiskHighLevel"];
        }

        if (array_key_exists("PodBaseLineRiskTotal",$param) and $param["PodBaseLineRiskTotal"] !== null) {
            $this->PodBaseLineRiskTotal = $param["PodBaseLineRiskTotal"];
        }

        if (array_key_exists("PodBaseLineRiskHighLevel",$param) and $param["PodBaseLineRiskHighLevel"] !== null) {
            $this->PodBaseLineRiskHighLevel = $param["PodBaseLineRiskHighLevel"];
        }
    }
}
