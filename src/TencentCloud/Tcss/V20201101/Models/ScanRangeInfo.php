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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描范围信息
 *
 * @method boolean getIsAll() 获取true:选择全部；
false:部分选择
 * @method void setIsAll(boolean $IsAll) 设置true:选择全部；
false:部分选择
 * @method string getRangeType() 获取SCAN_NORMAL:普通节点；
SCAN_SUPER:超级节点
SCAN_CONTAINER:容器
 * @method void setRangeType(string $RangeType) 设置SCAN_NORMAL:普通节点；
SCAN_SUPER:超级节点
SCAN_CONTAINER:容器
 * @method array getIDs() 获取选择的ID
 * @method void setIDs(array $IDs) 设置选择的ID
 */
class ScanRangeInfo extends AbstractModel
{
    /**
     * @var boolean true:选择全部；
false:部分选择
     */
    public $IsAll;

    /**
     * @var string SCAN_NORMAL:普通节点；
SCAN_SUPER:超级节点
SCAN_CONTAINER:容器
     */
    public $RangeType;

    /**
     * @var array 选择的ID
     */
    public $IDs;

    /**
     * @param boolean $IsAll true:选择全部；
false:部分选择
     * @param string $RangeType SCAN_NORMAL:普通节点；
SCAN_SUPER:超级节点
SCAN_CONTAINER:容器
     * @param array $IDs 选择的ID
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
        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }
    }
}
