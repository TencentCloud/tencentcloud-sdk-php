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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警类型列表回包
 *
 * @method array getAlarmTypeSet() 获取告警类型查询列表
 * @method void setAlarmTypeSet(array $AlarmTypeSet) 设置告警类型查询列表
 */
class DescribeAlarmTypeListRes extends AbstractModel
{
    /**
     * @var array 告警类型查询列表
     */
    public $AlarmTypeSet;

    /**
     * @param array $AlarmTypeSet 告警类型查询列表
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
        if (array_key_exists("AlarmTypeSet",$param) and $param["AlarmTypeSet"] !== null) {
            $this->AlarmTypeSet = [];
            foreach ($param["AlarmTypeSet"] as $key => $value){
                $obj = new AlarmTypeDetailInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTypeSet, $obj);
            }
        }
    }
}
