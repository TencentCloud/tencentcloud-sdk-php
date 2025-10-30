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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePermissionStatusInfo请求参数结构体
 *
 * @method integer getTableId() 获取页数
 * @method void setTableId(integer $TableId) 设置页数
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getProjectId() 获取1
 * @method void setProjectId(string $ProjectId) 设置1
 */
class DescribePermissionStatusInfoRequest extends AbstractModel
{
    /**
     * @var integer 页数
     */
    public $TableId;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 1
     */
    public $ProjectId;

    /**
     * @param integer $TableId 页数
     * @param string $Type 类型
     * @param string $ProjectId 1
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
