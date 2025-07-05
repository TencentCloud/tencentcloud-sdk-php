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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPALevelGroups请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getName() 获取分级组名称
 * @method void setName(string $Name) 设置分级组名称
 * @method integer getLimit() 获取每页返回的记录数
 * @method void setLimit(integer $Limit) 设置每页返回的记录数
 * @method integer getOffset() 获取从第几条记录开始返回
 * @method void setOffset(integer $Offset) 设置从第几条记录开始返回
 */
class DescribeDSPALevelGroupsRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 分级组名称
     */
    public $Name;

    /**
     * @var integer 每页返回的记录数
     */
    public $Limit;

    /**
     * @var integer 从第几条记录开始返回
     */
    public $Offset;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $Name 分级组名称
     * @param integer $Limit 每页返回的记录数
     * @param integer $Offset 从第几条记录开始返回
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
