<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessDBInstances请求参数结构体
 *
 * @method array getFilter() 获取查询条件
 * @method void setFilter(array $Filter) 设置查询条件
 * @method integer getLimit() 获取查询个数
 * @method void setLimit(integer $Limit) 设置查询个数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeServerlessDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 查询条件
     */
    public $Filter;

    /**
     * @var integer 查询个数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param array $Filter 查询条件
     * @param integer $Limit 查询个数
     * @param integer $Offset 偏移量
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
        if (array_key_exists('Filter',$param) and $param['Filter'] !== null) {
            $this->Filter = [];
            foreach ($param['Filter'] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }
    }
}
