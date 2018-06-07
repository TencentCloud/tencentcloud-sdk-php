<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTaskStatus() 获取任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method AppDetailInfo getAppDetailInfo() 获取app信息
 * @method void setAppDetailInfo(AppDetailInfo $AppDetailInfo) 设置app信息
 * @method VirusInfo getVirusInfo() 获取病毒信息
 * @method void setVirusInfo(VirusInfo $VirusInfo) 设置病毒信息
 * @method VulInfo getVulInfo() 获取漏洞信息
 * @method void setVulInfo(VulInfo $VulInfo) 设置漏洞信息
 * @method AdInfo getAdInfo() 获取广告插件信息
 * @method void setAdInfo(AdInfo $AdInfo) 设置广告插件信息
 * @method integer getTaskTime() 获取提交扫描的时间
 * @method void setTaskTime(integer $TaskTime) 设置提交扫描的时间
 */

/**
 *app扫描结果集
 */
class ScanSetInfo extends AbstractModel
{
    /**
     * @var integer 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $TaskStatus;

    /**
     * @var AppDetailInfo app信息
     */
    public $AppDetailInfo;

    /**
     * @var VirusInfo 病毒信息
     */
    public $VirusInfo;

    /**
     * @var VulInfo 漏洞信息
     */
    public $VulInfo;

    /**
     * @var AdInfo 广告插件信息
     */
    public $AdInfo;

    /**
     * @var integer 提交扫描的时间
     */
    public $TaskTime;
    /**
     * @param integer $TaskStatus 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param AppDetailInfo $AppDetailInfo app信息
     * @param VirusInfo $VirusInfo 病毒信息
     * @param VulInfo $VulInfo 漏洞信息
     * @param AdInfo $AdInfo 广告插件信息
     * @param integer $TaskTime 提交扫描的时间
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("AppDetailInfo",$param) and $param["AppDetailInfo"] !== null) {
            $this->AppDetailInfo = new AppDetailInfo();
            $this->AppDetailInfo->deserialize($param["AppDetailInfo"]);
        }

        if (array_key_exists("VirusInfo",$param) and $param["VirusInfo"] !== null) {
            $this->VirusInfo = new VirusInfo();
            $this->VirusInfo->deserialize($param["VirusInfo"]);
        }

        if (array_key_exists("VulInfo",$param) and $param["VulInfo"] !== null) {
            $this->VulInfo = new VulInfo();
            $this->VulInfo->deserialize($param["VulInfo"]);
        }

        if (array_key_exists("AdInfo",$param) and $param["AdInfo"] !== null) {
            $this->AdInfo = new AdInfo();
            $this->AdInfo->deserialize($param["AdInfo"]);
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }
    }
}
