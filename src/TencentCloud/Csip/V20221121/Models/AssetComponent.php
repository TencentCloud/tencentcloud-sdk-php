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
 * 资产中组件信息
 *
 * @method string getName() 获取<p>组件名</p>
 * @method void setName(string $Name) 设置<p>组件名</p>
 * @method string getVersion() 获取<p>组件版本</p>
 * @method void setVersion(string $Version) 设置<p>组件版本</p>
 * @method string getType() 获取<p>组件类型</p>
 * @method void setType(string $Type) 设置<p>组件类型</p>
 * @method string getFirstFoundTime() 获取<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) 设置<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() 获取<p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置<p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getId() 获取<p>组件id</p>
 * @method void setId(string $Id) 设置<p>组件id</p>
 * @method string getOwnerAccountName() 获取<p>组件所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>组件所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>组件所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>组件所属账号appid</p>
 * @method string getOwnerUin() 获取<p>组件所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>组件所属账号uin</p>
 * @method integer getAffectedImageCount() 获取<p>影响镜像数</p>
 * @method void setAffectedImageCount(integer $AffectedImageCount) 设置<p>影响镜像数</p>
 */
class AssetComponent extends AbstractModel
{
    /**
     * @var string <p>组件名</p>
     */
    public $Name;

    /**
     * @var string <p>组件版本</p>
     */
    public $Version;

    /**
     * @var string <p>组件类型</p>
     */
    public $Type;

    /**
     * @var string <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var string <p>组件id</p>
     */
    public $Id;

    /**
     * @var string <p>组件所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>组件所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>组件所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>影响镜像数</p>
     */
    public $AffectedImageCount;

    /**
     * @param string $Name <p>组件名</p>
     * @param string $Version <p>组件版本</p>
     * @param string $Type <p>组件类型</p>
     * @param string $FirstFoundTime <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>最后发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $Id <p>组件id</p>
     * @param string $OwnerAccountName <p>组件所属账号名</p>
     * @param integer $OwnerAppId <p>组件所属账号appid</p>
     * @param string $OwnerUin <p>组件所属账号uin</p>
     * @param integer $AffectedImageCount <p>影响镜像数</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AffectedImageCount",$param) and $param["AffectedImageCount"] !== null) {
            $this->AffectedImageCount = $param["AffectedImageCount"];
        }
    }
}
