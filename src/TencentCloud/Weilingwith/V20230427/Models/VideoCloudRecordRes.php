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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云录像接口结果
 *
 * @method integer getTotalCount() 获取录像信息总数
 * @method void setTotalCount(integer $TotalCount) 设置录像信息总数
 * @method array getRecordSet() 获取录像信息列表
 * @method void setRecordSet(array $RecordSet) 设置录像信息列表
 */
class VideoCloudRecordRes extends AbstractModel
{
    /**
     * @var integer 录像信息总数
     */
    public $TotalCount;

    /**
     * @var array 录像信息列表
     */
    public $RecordSet;

    /**
     * @param integer $TotalCount 录像信息总数
     * @param array $RecordSet 录像信息列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RecordSet",$param) and $param["RecordSet"] !== null) {
            $this->RecordSet = [];
            foreach ($param["RecordSet"] as $key => $value){
                $obj = new RecordInfo();
                $obj->deserialize($value);
                array_push($this->RecordSet, $obj);
            }
        }
    }
}
