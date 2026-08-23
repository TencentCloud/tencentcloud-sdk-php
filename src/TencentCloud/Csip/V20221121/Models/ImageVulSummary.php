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
 * 镜像漏洞信息
 *
 * @method string getOwnerAccountName() 获取<p>所有者账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>所有者账号名</p>
 * @method string getOwnerUin() 获取<p>所有者账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>所有者账号uin</p>
 * @method integer getOwnerAppId() 获取<p>所有者账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>所有者账号appid</p>
 * @method string getFirstFoundTime() 获取<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) 设置<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() 获取<p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置<p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getAffectImageCount() 获取<p>影响镜像数</p>
 * @method void setAffectImageCount(integer $AffectImageCount) 设置<p>影响镜像数</p>
 * @method ImageVulBaseInfo getVulInfo() 获取<p>漏洞信息</p>
 * @method void setVulInfo(ImageVulBaseInfo $VulInfo) 设置<p>漏洞信息</p>
 * @method integer getID() 获取<p>记录id</p>
 * @method void setID(integer $ID) 设置<p>记录id</p>
 */
class ImageVulSummary extends AbstractModel
{
    /**
     * @var string <p>所有者账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>所有者账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>所有者账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var integer <p>影响镜像数</p>
     */
    public $AffectImageCount;

    /**
     * @var ImageVulBaseInfo <p>漏洞信息</p>
     */
    public $VulInfo;

    /**
     * @var integer <p>记录id</p>
     */
    public $ID;

    /**
     * @param string $OwnerAccountName <p>所有者账号名</p>
     * @param string $OwnerUin <p>所有者账号uin</p>
     * @param integer $OwnerAppId <p>所有者账号appid</p>
     * @param string $FirstFoundTime <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $AffectImageCount <p>影响镜像数</p>
     * @param ImageVulBaseInfo $VulInfo <p>漏洞信息</p>
     * @param integer $ID <p>记录id</p>
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
        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("AffectImageCount",$param) and $param["AffectImageCount"] !== null) {
            $this->AffectImageCount = $param["AffectImageCount"];
        }

        if (array_key_exists("VulInfo",$param) and $param["VulInfo"] !== null) {
            $this->VulInfo = new ImageVulBaseInfo();
            $this->VulInfo->deserialize($param["VulInfo"]);
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
