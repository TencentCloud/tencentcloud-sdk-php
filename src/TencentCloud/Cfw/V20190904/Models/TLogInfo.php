<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 告警中心概览数据

 *
 * @method integer getOutNum() 获取失陷主机
 * @method void setOutNum(integer $OutNum) 设置失陷主机
 * @method integer getHandleNum() 获取待处置告警
 * @method void setHandleNum(integer $HandleNum) 设置待处置告警
 * @method integer getVulNum() 获取漏洞攻击
 * @method void setVulNum(integer $VulNum) 设置漏洞攻击
 * @method integer getNetworkNum() 获取网络探测
 * @method void setNetworkNum(integer $NetworkNum) 设置网络探测
 * @method integer getBanNum() 获取封禁列表
 * @method void setBanNum(integer $BanNum) 设置封禁列表
 * @method integer getBruteForceNum() 获取暴力破解
 * @method void setBruteForceNum(integer $BruteForceNum) 设置暴力破解
 */
class TLogInfo extends AbstractModel
{
    /**
     * @var integer 失陷主机
     */
    public $OutNum;

    /**
     * @var integer 待处置告警
     */
    public $HandleNum;

    /**
     * @var integer 漏洞攻击
     */
    public $VulNum;

    /**
     * @var integer 网络探测
     */
    public $NetworkNum;

    /**
     * @var integer 封禁列表
     */
    public $BanNum;

    /**
     * @var integer 暴力破解
     */
    public $BruteForceNum;

    /**
     * @param integer $OutNum 失陷主机
     * @param integer $HandleNum 待处置告警
     * @param integer $VulNum 漏洞攻击
     * @param integer $NetworkNum 网络探测
     * @param integer $BanNum 封禁列表
     * @param integer $BruteForceNum 暴力破解
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
        if (array_key_exists("OutNum",$param) and $param["OutNum"] !== null) {
            $this->OutNum = $param["OutNum"];
        }

        if (array_key_exists("HandleNum",$param) and $param["HandleNum"] !== null) {
            $this->HandleNum = $param["HandleNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("NetworkNum",$param) and $param["NetworkNum"] !== null) {
            $this->NetworkNum = $param["NetworkNum"];
        }

        if (array_key_exists("BanNum",$param) and $param["BanNum"] !== null) {
            $this->BanNum = $param["BanNum"];
        }

        if (array_key_exists("BruteForceNum",$param) and $param["BruteForceNum"] !== null) {
            $this->BruteForceNum = $param["BruteForceNum"];
        }
    }
}
