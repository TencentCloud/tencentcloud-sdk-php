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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 状态汇总
 *
 * @method integer getNormalCount() 获取正常状态的数目
 * @method void setNormalCount(integer $NormalCount) 设置正常状态的数目
 * @method integer getNotifyCount() 获取通知状态的数目
 * @method void setNotifyCount(integer $NotifyCount) 设置通知状态的数目
 * @method integer getAbnormalCount() 获取异常状态的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalCount(integer $AbnormalCount) 设置异常状态的数目
注意：此字段可能返回 null，表示取不到有效值。
 */
class TotalStatus extends AbstractModel
{
    /**
     * @var integer 正常状态的数目
     */
    public $NormalCount;

    /**
     * @var integer 通知状态的数目
     */
    public $NotifyCount;

    /**
     * @var integer 异常状态的数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalCount;

    /**
     * @param integer $NormalCount 正常状态的数目
     * @param integer $NotifyCount 通知状态的数目
     * @param integer $AbnormalCount 异常状态的数目
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
        if (array_key_exists("NormalCount",$param) and $param["NormalCount"] !== null) {
            $this->NormalCount = $param["NormalCount"];
        }

        if (array_key_exists("NotifyCount",$param) and $param["NotifyCount"] !== null) {
            $this->NotifyCount = $param["NotifyCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }
    }
}
