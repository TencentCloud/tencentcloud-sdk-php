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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getQuuid() 获取云主机ID
 * @method void setQuuid(string $Quuid) 设置云主机ID
 * @method integer getTagId() 获取标签ID
 * @method void setTagId(integer $TagId) 设置标签ID
 * @method string getMRegion() 获取主机地区
 * @method void setMRegion(string $MRegion) 设置主机地区
 * @method string getMArea() 获取主机地区类型(CVM|BM)
 * @method void setMArea(string $MArea) 设置主机地区类型(CVM|BM)
 */

/**
 *AddMachineTag请求参数结构体
 */
class AddMachineTagRequest extends AbstractModel
{
    /**
     * @var string 云主机ID
     */
    public $Quuid;

    /**
     * @var integer 标签ID
     */
    public $TagId;

    /**
     * @var string 主机地区
     */
    public $MRegion;

    /**
     * @var string 主机地区类型(CVM|BM)
     */
    public $MArea;
    /**
     * @param string $Quuid 云主机ID
     * @param integer $TagId 标签ID
     * @param string $MRegion 主机地区
     * @param string $MArea 主机地区类型(CVM|BM)
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("MRegion",$param) and $param["MRegion"] !== null) {
            $this->MRegion = $param["MRegion"];
        }

        if (array_key_exists("MArea",$param) and $param["MArea"] !== null) {
            $this->MArea = $param["MArea"];
        }
    }
}
