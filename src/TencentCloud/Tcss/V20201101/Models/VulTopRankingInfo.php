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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞Top排名信息
 *
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getLevel() 获取威胁等级,CRITICAL:严重 HIGH:高/MIDDLE:中/LOW:低
 * @method void setLevel(string $Level) 设置威胁等级,CRITICAL:严重 HIGH:高/MIDDLE:中/LOW:低
 * @method integer getAffectedImageCount() 获取影响的镜像数
 * @method void setAffectedImageCount(integer $AffectedImageCount) 设置影响的镜像数
 * @method integer getAffectedContainerCount() 获取影响的容器数
 * @method void setAffectedContainerCount(integer $AffectedContainerCount) 设置影响的容器数
 * @method integer getID() 获取漏洞ID
 * @method void setID(integer $ID) 设置漏洞ID
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 */
class VulTopRankingInfo extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 威胁等级,CRITICAL:严重 HIGH:高/MIDDLE:中/LOW:低
     */
    public $Level;

    /**
     * @var integer 影响的镜像数
     */
    public $AffectedImageCount;

    /**
     * @var integer 影响的容器数
     */
    public $AffectedContainerCount;

    /**
     * @var integer 漏洞ID
     */
    public $ID;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @param string $VulName 漏洞名称
     * @param string $Level 威胁等级,CRITICAL:严重 HIGH:高/MIDDLE:中/LOW:低
     * @param integer $AffectedImageCount 影响的镜像数
     * @param integer $AffectedContainerCount 影响的容器数
     * @param integer $ID 漏洞ID
     * @param string $PocID 漏洞PocID
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AffectedImageCount",$param) and $param["AffectedImageCount"] !== null) {
            $this->AffectedImageCount = $param["AffectedImageCount"];
        }

        if (array_key_exists("AffectedContainerCount",$param) and $param["AffectedContainerCount"] !== null) {
            $this->AffectedContainerCount = $param["AffectedContainerCount"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }
    }
}
