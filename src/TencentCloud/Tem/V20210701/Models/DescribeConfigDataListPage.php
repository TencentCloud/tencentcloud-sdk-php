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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置信息的分页列表
 *
 * @method array getRecords() 获取记录
 * @method void setRecords(array $Records) 设置记录
 * @method string getContinueToken() 获取分页游标，用以查询下一页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueToken(string $ContinueToken) 设置分页游标，用以查询下一页
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainingCount() 获取剩余数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainingCount(integer $RemainingCount) 设置剩余数目
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeConfigDataListPage extends AbstractModel
{
    /**
     * @var array 记录
     */
    public $Records;

    /**
     * @var string 分页游标，用以查询下一页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueToken;

    /**
     * @var integer 剩余数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainingCount;

    /**
     * @param array $Records 记录
     * @param string $ContinueToken 分页游标，用以查询下一页
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainingCount 剩余数目
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new ConfigData();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }

        if (array_key_exists("RemainingCount",$param) and $param["RemainingCount"] !== null) {
            $this->RemainingCount = $param["RemainingCount"];
        }
    }
}
