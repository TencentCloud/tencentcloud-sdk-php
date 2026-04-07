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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源信息。
 *
 * @method string getName() 获取名称。
 * @method void setName(string $Name) 设置名称。
 * @method string getType() 获取source类型，区分直播Live和点播Vod。
 * @method void setType(string $Type) 设置source类型，区分直播Live和点播Vod。
 * @method array getPackageConf() 获取源配置。
 * @method void setPackageConf(array $PackageConf) 设置源配置。
 * @method string getId() 获取ID。
 * @method void setId(string $Id) 设置ID。
 * @method integer getCreateTime() 获取创建时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳。
 * @method integer getUpdateTime() 获取更新时间戳。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳。
 * @method string getRegion() 获取Region。
 * @method void setRegion(string $Region) 设置Region。
 * @method array getSourceTags() 获取源标签
 * @method void setSourceTags(array $SourceTags) 设置源标签
 */
class SourceInfo extends AbstractModel
{
    /**
     * @var string 名称。
     */
    public $Name;

    /**
     * @var string source类型，区分直播Live和点播Vod。
     */
    public $Type;

    /**
     * @var array 源配置。
     */
    public $PackageConf;

    /**
     * @var string ID。
     */
    public $Id;

    /**
     * @var integer 创建时间戳。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳。
     */
    public $UpdateTime;

    /**
     * @var string Region。
     */
    public $Region;

    /**
     * @var array 源标签
     */
    public $SourceTags;

    /**
     * @param string $Name 名称。
     * @param string $Type source类型，区分直播Live和点播Vod。
     * @param array $PackageConf 源配置。
     * @param string $Id ID。
     * @param integer $CreateTime 创建时间戳。
     * @param integer $UpdateTime 更新时间戳。
     * @param string $Region Region。
     * @param array $SourceTags 源标签
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PackageConf",$param) and $param["PackageConf"] !== null) {
            $this->PackageConf = [];
            foreach ($param["PackageConf"] as $key => $value){
                $obj = new SourcePackageConf();
                $obj->deserialize($value);
                array_push($this->PackageConf, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceTags",$param) and $param["SourceTags"] !== null) {
            $this->SourceTags = [];
            foreach ($param["SourceTags"] as $key => $value){
                $obj = new SourceTag();
                $obj->deserialize($value);
                array_push($this->SourceTags, $obj);
            }
        }
    }
}
