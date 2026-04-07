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
 * CreateStreamPackageSource请求参数结构体
 *
 * @method string getAttachedLocation() 获取该source所属的location id，必填且唯一绑定一个location。
 * @method void setAttachedLocation(string $AttachedLocation) 设置该source所属的location id，必填且唯一绑定一个location。
 * @method string getName() 获取Source名称，在location下面全局唯一。
 * @method void setName(string $Name) 设置Source名称，在location下面全局唯一。
 * @method string getType() 获取区分直播Live和点播VOD source类型，可选值：Live、VOD。
 * @method void setType(string $Type) 设置区分直播Live和点播VOD source类型，可选值：Live、VOD。
 * @method array getPackageConfs() 获取source具体配置。
 * @method void setPackageConfs(array $PackageConfs) 设置source具体配置。
 * @method array getSourceTags() 获取sourcetag标签，ADS可以根据Source Tag信息，返回更精准的广告
 * @method void setSourceTags(array $SourceTags) 设置sourcetag标签，ADS可以根据Source Tag信息，返回更精准的广告
 */
class CreateStreamPackageSourceRequest extends AbstractModel
{
    /**
     * @var string 该source所属的location id，必填且唯一绑定一个location。
     */
    public $AttachedLocation;

    /**
     * @var string Source名称，在location下面全局唯一。
     */
    public $Name;

    /**
     * @var string 区分直播Live和点播VOD source类型，可选值：Live、VOD。
     */
    public $Type;

    /**
     * @var array source具体配置。
     */
    public $PackageConfs;

    /**
     * @var array sourcetag标签，ADS可以根据Source Tag信息，返回更精准的广告
     */
    public $SourceTags;

    /**
     * @param string $AttachedLocation 该source所属的location id，必填且唯一绑定一个location。
     * @param string $Name Source名称，在location下面全局唯一。
     * @param string $Type 区分直播Live和点播VOD source类型，可选值：Live、VOD。
     * @param array $PackageConfs source具体配置。
     * @param array $SourceTags sourcetag标签，ADS可以根据Source Tag信息，返回更精准的广告
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
        if (array_key_exists("AttachedLocation",$param) and $param["AttachedLocation"] !== null) {
            $this->AttachedLocation = $param["AttachedLocation"];
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
