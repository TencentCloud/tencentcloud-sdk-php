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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户天轨迹
 *
 * @method string getTraceDate() 获取轨迹日期
 * @method void setTraceDate(string $TraceDate) 设置轨迹日期
 * @method array getTracePointSet() 获取轨迹点序列
 * @method void setTracePointSet(array $TracePointSet) 设置轨迹点序列
 */
class DailyTracePoint extends AbstractModel
{
    /**
     * @var string 轨迹日期
     */
    public $TraceDate;

    /**
     * @var array 轨迹点序列
     */
    public $TracePointSet;

    /**
     * @param string $TraceDate 轨迹日期
     * @param array $TracePointSet 轨迹点序列
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
        if (array_key_exists('TraceDate',$param) and $param['TraceDate'] !== null) {
            $this->TraceDate = $param['TraceDate'];
        }

        if (array_key_exists('TracePointSet',$param) and $param['TracePointSet'] !== null) {
            $this->TracePointSet = [];
            foreach ($param['TracePointSet'] as $key => $value){
                $obj = new PersonTracePoint();
                $obj->deserialize($value);
                array_push($this->TracePointSet, $obj);
            }
        }
    }
}
