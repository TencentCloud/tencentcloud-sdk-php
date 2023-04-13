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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份保留策略详情
集群策略： ClueterId=集群Id， TableGroupId=-1,  TableName="-1"
集群+表格组策略： ClueterId=集群Id， TableGroupId=表格组Id,  TableName="-1"
集群+表格组+表格策略： ClueterId=集群Id， TableGroupId=表格组Id,  TableName="表格名"

FileTag=0 txh引擎文件， =1 ulog流水文件， 当要设置为=1时， 这两项不可变 TableGroupId=-1和TableName="-1"
ExpireDay为大于等于1，小于999的整形数字
OperType=0 代表动作为新增， =1 代表动作为删除， =2 代表动作为修改， 其中0和2可以混用，后端实现兼容
 *
 * @method string getTableGroupId() 获取所属表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置所属表格组ID
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method integer getFileTag() 获取文件标签，见上面描述
 * @method void setFileTag(integer $FileTag) 设置文件标签，见上面描述
 * @method integer getExpireDay() 获取淘汰天数，见上面描述
 * @method void setExpireDay(integer $ExpireDay) 设置淘汰天数，见上面描述
 * @method integer getOperType() 获取操作类型，见上面描述
 * @method void setOperType(integer $OperType) 设置操作类型，见上面描述
 */
class BackupExpireRuleInfo extends AbstractModel
{
    /**
     * @var string 所属表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var integer 文件标签，见上面描述
     */
    public $FileTag;

    /**
     * @var integer 淘汰天数，见上面描述
     */
    public $ExpireDay;

    /**
     * @var integer 操作类型，见上面描述
     */
    public $OperType;

    /**
     * @param string $TableGroupId 所属表格组ID
     * @param string $TableName 表名称
     * @param integer $FileTag 文件标签，见上面描述
     * @param integer $ExpireDay 淘汰天数，见上面描述
     * @param integer $OperType 操作类型，见上面描述
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FileTag",$param) and $param["FileTag"] !== null) {
            $this->FileTag = $param["FileTag"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }

        if (array_key_exists("OperType",$param) and $param["OperType"] !== null) {
            $this->OperType = $param["OperType"];
        }
    }
}
