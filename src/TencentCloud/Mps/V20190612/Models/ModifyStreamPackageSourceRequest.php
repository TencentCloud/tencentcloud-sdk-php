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
 * ModifyStreamPackageSource请求参数结构体
 *
 * @method string getId() 获取Source Id。
 * @method void setId(string $Id) 设置Source Id。
 * @method string getName() 获取修改后的名称。
 * @method void setName(string $Name) 设置修改后的名称。
 * @method string getType() 获取区分直播Live和点播VOD source类型。	
 * @method void setType(string $Type) 设置区分直播Live和点播VOD source类型。	
 * @method array getPackageConfs() 获取source配置。	
 * @method void setPackageConfs(array $PackageConfs) 设置source配置。	
 * @method array getSourceTags() 获取ADS可以根据Source Tag信息，返回更精准的广告。
 * @method void setSourceTags(array $SourceTags) 设置ADS可以根据Source Tag信息，返回更精准的广告。
 */
class ModifyStreamPackageSourceRequest extends AbstractModel
{
    /**
     * @var string Source Id。
     */
    public $Id;

    /**
     * @var string 修改后的名称。
     */
    public $Name;

    /**
     * @var string 区分直播Live和点播VOD source类型。	
     */
    public $Type;

    /**
     * @var array source配置。	
     */
    public $PackageConfs;

    /**
     * @var array ADS可以根据Source Tag信息，返回更精准的广告。
     */
    public $SourceTags;

    /**
     * @param string $Id Source Id。
     * @param string $Name 修改后的名称。
     * @param string $Type 区分直播Live和点播VOD source类型。	
     * @param array $PackageConfs source配置。	
     * @param array $SourceTags ADS可以根据Source Tag信息，返回更精准的广告。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PackageConfs",$param) and $param["PackageConfs"] !== null) {
            $this->PackageConfs = [];
            foreach ($param["PackageConfs"] as $key => $value){
                $obj = new SourcePackageConf();
                $obj->deserialize($value);
                array_push($this->PackageConfs, $obj);
            }
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
