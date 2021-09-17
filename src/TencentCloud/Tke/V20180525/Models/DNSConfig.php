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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义DNS配置
 *
 * @method array getNameservers() 获取DNS 服务器IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameservers(array $Nameservers) 设置DNS 服务器IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSearches() 获取DNS搜索域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearches(array $Searches) 设置DNS搜索域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptions() 获取对象选项列表，每个对象由name和value（可选）构成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptions(array $Options) 设置对象选项列表，每个对象由name和value（可选）构成
注意：此字段可能返回 null，表示取不到有效值。
 */
class DNSConfig extends AbstractModel
{
    /**
     * @var array DNS 服务器IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nameservers;

    /**
     * @var array DNS搜索域列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Searches;

    /**
     * @var array 对象选项列表，每个对象由name和value（可选）构成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Options;

    /**
     * @param array $Nameservers DNS 服务器IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Searches DNS搜索域列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Options 对象选项列表，每个对象由name和value（可选）构成
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Nameservers",$param) and $param["Nameservers"] !== null) {
            $this->Nameservers = $param["Nameservers"];
        }

        if (array_key_exists("Searches",$param) and $param["Searches"] !== null) {
            $this->Searches = $param["Searches"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new DNSConfigOption();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
