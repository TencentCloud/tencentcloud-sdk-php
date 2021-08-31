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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateMachineTags请求参数结构体
 *
 * @method string getQuuid() 获取机器 Quuid
 * @method void setQuuid(string $Quuid) 设置机器 Quuid
 * @method string getMachineRegion() 获取服务器地区 如: ap-guangzhou
 * @method void setMachineRegion(string $MachineRegion) 设置服务器地区 如: ap-guangzhou
 * @method string getMachineArea() 获取服务器类型(CVM|BM|ECM|LH|Other)
 * @method void setMachineArea(string $MachineArea) 设置服务器类型(CVM|BM|ECM|LH|Other)
 * @method array getTagIds() 获取标签ID，该操作会覆盖原有的标签列表
 * @method void setTagIds(array $TagIds) 设置标签ID，该操作会覆盖原有的标签列表
 */
class UpdateMachineTagsRequest extends AbstractModel
{
    /**
     * @var string 机器 Quuid
     */
    public $Quuid;

    /**
     * @var string 服务器地区 如: ap-guangzhou
     */
    public $MachineRegion;

    /**
     * @var string 服务器类型(CVM|BM|ECM|LH|Other)
     */
    public $MachineArea;

    /**
     * @var array 标签ID，该操作会覆盖原有的标签列表
     */
    public $TagIds;

    /**
     * @param string $Quuid 机器 Quuid
     * @param string $MachineRegion 服务器地区 如: ap-guangzhou
     * @param string $MachineArea 服务器类型(CVM|BM|ECM|LH|Other)
     * @param array $TagIds 标签ID，该操作会覆盖原有的标签列表
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("MachineArea",$param) and $param["MachineArea"] !== null) {
            $this->MachineArea = $param["MachineArea"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
