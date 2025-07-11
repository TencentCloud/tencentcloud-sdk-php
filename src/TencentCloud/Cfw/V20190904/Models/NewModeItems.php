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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新增模式传递参数
 *
 * @method array getVpcList() 获取新增模式下接入的vpc列表
 * @method void setVpcList(array $VpcList) 设置新增模式下接入的vpc列表
 * @method array getEips() 获取新增模式下绑定的出口弹性公网ip列表，其中Eips和AddCount至少传递一个。
 * @method void setEips(array $Eips) 设置新增模式下绑定的出口弹性公网ip列表，其中Eips和AddCount至少传递一个。
 * @method integer getAddCount() 获取新增模式下新增绑定的出口弹性公网ip个数，其中Eips和AddCount至少传递一个。
 * @method void setAddCount(integer $AddCount) 设置新增模式下新增绑定的出口弹性公网ip个数，其中Eips和AddCount至少传递一个。
 */
class NewModeItems extends AbstractModel
{
    /**
     * @var array 新增模式下接入的vpc列表
     */
    public $VpcList;

    /**
     * @var array 新增模式下绑定的出口弹性公网ip列表，其中Eips和AddCount至少传递一个。
     */
    public $Eips;

    /**
     * @var integer 新增模式下新增绑定的出口弹性公网ip个数，其中Eips和AddCount至少传递一个。
     */
    public $AddCount;

    /**
     * @param array $VpcList 新增模式下接入的vpc列表
     * @param array $Eips 新增模式下绑定的出口弹性公网ip列表，其中Eips和AddCount至少传递一个。
     * @param integer $AddCount 新增模式下新增绑定的出口弹性公网ip个数，其中Eips和AddCount至少传递一个。
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
        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }

        if (array_key_exists("AddCount",$param) and $param["AddCount"] !== null) {
            $this->AddCount = $param["AddCount"];
        }
    }
}
