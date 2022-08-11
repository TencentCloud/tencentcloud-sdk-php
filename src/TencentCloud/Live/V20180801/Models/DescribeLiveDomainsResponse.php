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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomains返回参数结构体
 *
 * @method integer getAllCount() 获取总记录数。
 * @method void setAllCount(integer $AllCount) 设置总记录数。
 * @method array getDomainList() 获取域名详细信息列表。
 * @method void setDomainList(array $DomainList) 设置域名详细信息列表。
 * @method integer getCreateLimitCount() 获取可继续添加域名数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateLimitCount(integer $CreateLimitCount) 设置可继续添加域名数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlayTypeCount() 获取启用的播放域名加速区域统计，数组元素分别为：中国大陆（境内），全球地区，国际/港澳台（境外）域名数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayTypeCount(array $PlayTypeCount) 设置启用的播放域名加速区域统计，数组元素分别为：中国大陆（境内），全球地区，国际/港澳台（境外）域名数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveDomainsResponse extends AbstractModel
{
    /**
     * @var integer 总记录数。
     */
    public $AllCount;

    /**
     * @var array 域名详细信息列表。
     */
    public $DomainList;

    /**
     * @var integer 可继续添加域名数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateLimitCount;

    /**
     * @var array 启用的播放域名加速区域统计，数组元素分别为：中国大陆（境内），全球地区，国际/港澳台（境外）域名数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayTypeCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllCount 总记录数。
     * @param array $DomainList 域名详细信息列表。
     * @param integer $CreateLimitCount 可继续添加域名数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PlayTypeCount 启用的播放域名加速区域统计，数组元素分别为：中国大陆（境内），全球地区，国际/港澳台（境外）域名数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AllCount",$param) and $param["AllCount"] !== null) {
            $this->AllCount = $param["AllCount"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = [];
            foreach ($param["DomainList"] as $key => $value){
                $obj = new DomainInfo();
                $obj->deserialize($value);
                array_push($this->DomainList, $obj);
            }
        }

        if (array_key_exists("CreateLimitCount",$param) and $param["CreateLimitCount"] !== null) {
            $this->CreateLimitCount = $param["CreateLimitCount"];
        }

        if (array_key_exists("PlayTypeCount",$param) and $param["PlayTypeCount"] !== null) {
            $this->PlayTypeCount = $param["PlayTypeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
