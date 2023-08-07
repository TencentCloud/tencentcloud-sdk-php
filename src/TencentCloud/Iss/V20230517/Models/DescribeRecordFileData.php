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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于查询设备云端录像时间轴信息返回数据
 *
 * @method integer getTips() 获取提示类型，0:时间段内无归档录像，1:时间段内有归档录像
 * @method void setTips(integer $Tips) 设置提示类型，0:时间段内无归档录像，1:时间段内有归档录像
 * @method array getList() 获取存在为数组格式，不存在字段内容为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置存在为数组格式，不存在字段内容为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeRecordFileData extends AbstractModel
{
    /**
     * @var integer 提示类型，0:时间段内无归档录像，1:时间段内有归档录像
     */
    public $Tips;

    /**
     * @var array 存在为数组格式，不存在字段内容为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param integer $Tips 提示类型，0:时间段内无归档录像，1:时间段内有归档录像
     * @param array $List 存在为数组格式，不存在字段内容为空
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new RecordTimeLine();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
