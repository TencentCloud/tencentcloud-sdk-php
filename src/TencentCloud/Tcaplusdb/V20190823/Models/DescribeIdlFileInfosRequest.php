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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取文件所属应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置文件所属应用实例ID
 * @method array getLogicZoneIds() 获取文件所属大区ID
 * @method void setLogicZoneIds(array $LogicZoneIds) 设置文件所属大区ID
 * @method array getIdlFileIds() 获取指定文件ID
 * @method void setIdlFileIds(array $IdlFileIds) 设置指定文件ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取文件列表大小
 * @method void setLimit(integer $Limit) 设置文件列表大小
 */

/**
 *DescribeIdlFileInfos请求参数结构体
 */
class DescribeIdlFileInfosRequest extends AbstractModel
{
    /**
     * @var string 文件所属应用实例ID
     */
    public $ApplicationId;

    /**
     * @var array 文件所属大区ID
     */
    public $LogicZoneIds;

    /**
     * @var array 指定文件ID
     */
    public $IdlFileIds;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 文件列表大小
     */
    public $Limit;
    /**
     * @param string $ApplicationId 文件所属应用实例ID
     * @param array $LogicZoneIds 文件所属大区ID
     * @param array $IdlFileIds 指定文件ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 文件列表大小
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LogicZoneIds",$param) and $param["LogicZoneIds"] !== null) {
            $this->LogicZoneIds = $param["LogicZoneIds"];
        }

        if (array_key_exists("IdlFileIds",$param) and $param["IdlFileIds"] !== null) {
            $this->IdlFileIds = $param["IdlFileIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
