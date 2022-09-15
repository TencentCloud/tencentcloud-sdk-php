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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑白名单IP
 *
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getType() 获取IP类型，取值[black(黑IP)，white(白IP)]
 * @method void setType(string $Type) 设置IP类型，取值[black(黑IP)，white(白IP)]
 * @method array getInstanceDetailList() 获取黑白IP所属的实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置黑白IP所属的实例
 * @method integer getMask() 获取ip掩码，0表示32位完整ip
 * @method void setMask(integer $Mask) 设置ip掩码，0表示32位完整ip
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class BlackWhiteIpRelation extends AbstractModel
{
    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string IP类型，取值[black(黑IP)，white(白IP)]
     */
    public $Type;

    /**
     * @var array 黑白IP所属的实例
     */
    public $InstanceDetailList;

    /**
     * @var integer ip掩码，0表示32位完整ip
     */
    public $Mask;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $Ip IP地址
     * @param string $Type IP类型，取值[black(黑IP)，white(白IP)]
     * @param array $InstanceDetailList 黑白IP所属的实例
     * @param integer $Mask ip掩码，0表示32位完整ip
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
