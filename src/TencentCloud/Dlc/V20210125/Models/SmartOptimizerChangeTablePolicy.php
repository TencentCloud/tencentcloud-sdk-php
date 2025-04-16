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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混合表中，change表的数据保存时间，单位为天
 *
 * @method integer getDataRetentionTime() 获取change表的数据保存时间，单位为天
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置change表的数据保存时间，单位为天
 */
class SmartOptimizerChangeTablePolicy extends AbstractModel
{
    /**
     * @var integer change表的数据保存时间，单位为天
     */
    public $DataRetentionTime;

    /**
     * @param integer $DataRetentionTime change表的数据保存时间，单位为天
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
        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }
    }
}
