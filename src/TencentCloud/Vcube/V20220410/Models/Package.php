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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源包结构
 *
 * @method integer getId() 获取资源包Id
 * @method void setId(integer $Id) 设置资源包Id
 * @method string getBizResourceId() 获取资源包资源Id
 * @method void setBizResourceId(string $BizResourceId) 设置资源包资源Id
 * @method string getSite() 获取站点 中国站还是国际站
 * @method void setSite(string $Site) 设置站点 中国站还是国际站
 * @method string getStartTime() 获取资源包开始生效时间
 * @method void setStartTime(string $StartTime) 设置资源包开始生效时间
 * @method string getEndTime() 获取资源包过期时间
 * @method void setEndTime(string $EndTime) 设置资源包过期时间
 * @method string getRefundTime() 获取资源包退费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundTime(string $RefundTime) 设置资源包退费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取资源包名称
 * @method void setName(string $Name) 设置资源包名称
 * @method string getType() 获取资源包类型ID,对应点播：PackageId 对应直播：TypeId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置资源包类型ID,对应点播：PackageId 对应直播：TypeId
注意：此字段可能返回 null，表示取不到有效值。
 */
class Package extends AbstractModel
{
    /**
     * @var integer 资源包Id
     */
    public $Id;

    /**
     * @var string 资源包资源Id
     */
    public $BizResourceId;

    /**
     * @var string 站点 中国站还是国际站
     */
    public $Site;

    /**
     * @var string 资源包开始生效时间
     */
    public $StartTime;

    /**
     * @var string 资源包过期时间
     */
    public $EndTime;

    /**
     * @var string 资源包退费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundTime;

    /**
     * @var string 资源包名称
     */
    public $Name;

    /**
     * @var string 资源包类型ID,对应点播：PackageId 对应直播：TypeId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param integer $Id 资源包Id
     * @param string $BizResourceId 资源包资源Id
     * @param string $Site 站点 中国站还是国际站
     * @param string $StartTime 资源包开始生效时间
     * @param string $EndTime 资源包过期时间
     * @param string $RefundTime 资源包退费时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 资源包名称
     * @param string $Type 资源包类型ID,对应点播：PackageId 对应直播：TypeId
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BizResourceId",$param) and $param["BizResourceId"] !== null) {
            $this->BizResourceId = $param["BizResourceId"];
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = $param["Site"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RefundTime",$param) and $param["RefundTime"] !== null) {
            $this->RefundTime = $param["RefundTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
