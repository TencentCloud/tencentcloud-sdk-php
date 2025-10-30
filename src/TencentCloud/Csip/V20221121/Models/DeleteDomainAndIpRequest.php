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
 * DeleteDomainAndIp请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getContent() 获取资产
 * @method void setContent(array $Content) 设置资产
 * @method integer getRetainPath() 获取是否保留路径配置，1：保留，其他：不保留，默认不传为不保留
 * @method void setRetainPath(integer $RetainPath) 设置是否保留路径配置，1：保留，其他：不保留，默认不传为不保留
 * @method integer getIgnoreAsset() 获取以后是否忽略该资产，，1：忽略，其他：不忽略，默认不传为忽略
 * @method void setIgnoreAsset(integer $IgnoreAsset) 设置以后是否忽略该资产，，1：忽略，其他：不忽略，默认不传为忽略
 * @method array getTags() 获取资产标签
 * @method void setTags(array $Tags) 设置资产标签
 * @method string getType() 获取删除类型，取值： ALL， 删除全部，将直接忽略Content的内容；                                           其他值 ,非全部，则Centent必填，  默认为其他值。
 * @method void setType(string $Type) 设置删除类型，取值： ALL， 删除全部，将直接忽略Content的内容；                                           其他值 ,非全部，则Centent必填，  默认为其他值。
 */
class DeleteDomainAndIpRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 资产
     */
    public $Content;

    /**
     * @var integer 是否保留路径配置，1：保留，其他：不保留，默认不传为不保留
     */
    public $RetainPath;

    /**
     * @var integer 以后是否忽略该资产，，1：忽略，其他：不忽略，默认不传为忽略
     */
    public $IgnoreAsset;

    /**
     * @var array 资产标签
     */
    public $Tags;

    /**
     * @var string 删除类型，取值： ALL， 删除全部，将直接忽略Content的内容；                                           其他值 ,非全部，则Centent必填，  默认为其他值。
     */
    public $Type;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param array $Content 资产
     * @param integer $RetainPath 是否保留路径配置，1：保留，其他：不保留，默认不传为不保留
     * @param integer $IgnoreAsset 以后是否忽略该资产，，1：忽略，其他：不忽略，默认不传为忽略
     * @param array $Tags 资产标签
     * @param string $Type 删除类型，取值： ALL， 删除全部，将直接忽略Content的内容；                                           其他值 ,非全部，则Centent必填，  默认为其他值。
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new PublicIpDomainListKey();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("RetainPath",$param) and $param["RetainPath"] !== null) {
            $this->RetainPath = $param["RetainPath"];
        }

        if (array_key_exists("IgnoreAsset",$param) and $param["IgnoreAsset"] !== null) {
            $this->IgnoreAsset = $param["IgnoreAsset"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
