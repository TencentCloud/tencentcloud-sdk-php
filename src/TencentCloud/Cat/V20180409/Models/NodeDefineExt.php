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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探测节点
 *
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 * @method string getCode() 获取节点代码
 * @method void setCode(string $Code) 设置节点代码
 * @method integer getType() 获取节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
 * @method void setType(integer $Type) 设置节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
 * @method string getNetService() 获取网络服务商
 * @method void setNetService(string $NetService) 设置网络服务商
 * @method string getDistrict() 获取区域
 * @method void setDistrict(string $District) 设置区域
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method integer getIPType() 获取IP 类型
<li> 1 = IPv4 </li>
<li> 2 = IPv6 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPType(integer $IPType) 设置IP 类型
<li> 1 = IPv4 </li>
<li> 2 = IPv6 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocation() 获取区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(integer $Location) 设置区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeType() 获取节点类型  如果为base 则为可用性拨测点，为空则为高级拨测点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeType(string $CodeType) 设置节点类型  如果为base 则为可用性拨测点，为空则为高级拨测点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskTypes() 获取节点支持的任务类型。1: 页面性能 2: 文件上传 3: 文件下载 4: 端口性能 5: 网络质量 6: 音视频体验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypes(array $TaskTypes) 设置节点支持的任务类型。1: 页面性能 2: 文件上传 3: 文件下载 4: 端口性能 5: 网络质量 6: 音视频体验
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeDefineExt extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @var string 节点代码
     */
    public $Code;

    /**
     * @var integer 节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
     */
    public $Type;

    /**
     * @var string 网络服务商
     */
    public $NetService;

    /**
     * @var string 区域
     */
    public $District;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var integer IP 类型
<li> 1 = IPv4 </li>
<li> 2 = IPv6 </li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPType;

    /**
     * @var integer 区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外 </li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string 节点类型  如果为base 则为可用性拨测点，为空则为高级拨测点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeType;

    /**
     * @var array 节点支持的任务类型。1: 页面性能 2: 文件上传 3: 文件下载 4: 端口性能 5: 网络质量 6: 音视频体验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypes;

    /**
     * @param string $Name 节点名称
     * @param string $Code 节点代码
     * @param integer $Type 节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
     * @param string $NetService 网络服务商
     * @param string $District 区域
     * @param string $City 城市
     * @param integer $IPType IP 类型
<li> 1 = IPv4 </li>
<li> 2 = IPv6 </li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Location 区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外 </li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeType 节点类型  如果为base 则为可用性拨测点，为空则为高级拨测点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskTypes 节点支持的任务类型。1: 页面性能 2: 文件上传 3: 文件下载 4: 端口性能 5: 网络质量 6: 音视频体验
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NetService",$param) and $param["NetService"] !== null) {
            $this->NetService = $param["NetService"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }
    }
}
