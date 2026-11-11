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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmAccessTopologySummary返回参数结构体
 *
 * @method integer getSourceIpCount() 获取来源IP数
 * @method void setSourceIpCount(integer $SourceIpCount) 设置来源IP数
 * @method integer getAccountCount() 获取访问账号数
 * @method void setAccountCount(integer $AccountCount) 设置访问账号数
 * @method integer getDbCount() 获取被访问的库数
 * @method void setDbCount(integer $DbCount) 设置被访问的库数
 * @method integer getTableCount() 获取被访问的表数
 * @method void setTableCount(integer $TableCount) 设置被访问的表数
 * @method integer getAccessCountLast7Days() 获取近7天访问次数
 * @method void setAccessCountLast7Days(integer $AccessCountLast7Days) 设置近7天访问次数
 * @method integer getAccessCountLast30Days() 获取近30天访问次数
 * @method void setAccessCountLast30Days(integer $AccessCountLast30Days) 设置近30天访问次数
 * @method integer getTableCombinationCount() 获取表级访问组合数（实例+账号+来源IP+库+schema+表 的去重组合数）
 * @method void setTableCombinationCount(integer $TableCombinationCount) 设置表级访问组合数（实例+账号+来源IP+库+schema+表 的去重组合数）
 * @method boolean getDataIncomplete() 获取表级访问组合数是否已达上限。为 true 时表级拓扑数据不完整：达上限后新出现的访问组合会被拒绝写入（已有组合仍继续累加），因此展示的拓扑可能缺失部分对象，且保留了哪些组合取决于到达顺序。建议据此显式提示数据不完整。查询不到该标志时不返回本字段
 * @method void setDataIncomplete(boolean $DataIncomplete) 设置表级访问组合数是否已达上限。为 true 时表级拓扑数据不完整：达上限后新出现的访问组合会被拒绝写入（已有组合仍继续累加），因此展示的拓扑可能缺失部分对象，且保留了哪些组合取决于到达顺序。建议据此显式提示数据不完整。查询不到该标志时不返回本字段
 * @method string getLastCalcTime() 获取数据最后计算时间。拓扑数据由后台预聚合产生，存在链路延迟；多成员账号场景取各成员中最早的一个
 * @method void setLastCalcTime(string $LastCalcTime) 设置数据最后计算时间。拓扑数据由后台预聚合产生，存在链路延迟；多成员账号场景取各成员中最早的一个
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmAccessTopologySummaryResponse extends AbstractModel
{
    /**
     * @var integer 来源IP数
     */
    public $SourceIpCount;

    /**
     * @var integer 访问账号数
     */
    public $AccountCount;

    /**
     * @var integer 被访问的库数
     */
    public $DbCount;

    /**
     * @var integer 被访问的表数
     */
    public $TableCount;

    /**
     * @var integer 近7天访问次数
     */
    public $AccessCountLast7Days;

    /**
     * @var integer 近30天访问次数
     */
    public $AccessCountLast30Days;

    /**
     * @var integer 表级访问组合数（实例+账号+来源IP+库+schema+表 的去重组合数）
     */
    public $TableCombinationCount;

    /**
     * @var boolean 表级访问组合数是否已达上限。为 true 时表级拓扑数据不完整：达上限后新出现的访问组合会被拒绝写入（已有组合仍继续累加），因此展示的拓扑可能缺失部分对象，且保留了哪些组合取决于到达顺序。建议据此显式提示数据不完整。查询不到该标志时不返回本字段
     */
    public $DataIncomplete;

    /**
     * @var string 数据最后计算时间。拓扑数据由后台预聚合产生，存在链路延迟；多成员账号场景取各成员中最早的一个
     */
    public $LastCalcTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SourceIpCount 来源IP数
     * @param integer $AccountCount 访问账号数
     * @param integer $DbCount 被访问的库数
     * @param integer $TableCount 被访问的表数
     * @param integer $AccessCountLast7Days 近7天访问次数
     * @param integer $AccessCountLast30Days 近30天访问次数
     * @param integer $TableCombinationCount 表级访问组合数（实例+账号+来源IP+库+schema+表 的去重组合数）
     * @param boolean $DataIncomplete 表级访问组合数是否已达上限。为 true 时表级拓扑数据不完整：达上限后新出现的访问组合会被拒绝写入（已有组合仍继续累加），因此展示的拓扑可能缺失部分对象，且保留了哪些组合取决于到达顺序。建议据此显式提示数据不完整。查询不到该标志时不返回本字段
     * @param string $LastCalcTime 数据最后计算时间。拓扑数据由后台预聚合产生，存在链路延迟；多成员账号场景取各成员中最早的一个
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SourceIpCount",$param) and $param["SourceIpCount"] !== null) {
            $this->SourceIpCount = $param["SourceIpCount"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("DbCount",$param) and $param["DbCount"] !== null) {
            $this->DbCount = $param["DbCount"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("AccessCountLast7Days",$param) and $param["AccessCountLast7Days"] !== null) {
            $this->AccessCountLast7Days = $param["AccessCountLast7Days"];
        }

        if (array_key_exists("AccessCountLast30Days",$param) and $param["AccessCountLast30Days"] !== null) {
            $this->AccessCountLast30Days = $param["AccessCountLast30Days"];
        }

        if (array_key_exists("TableCombinationCount",$param) and $param["TableCombinationCount"] !== null) {
            $this->TableCombinationCount = $param["TableCombinationCount"];
        }

        if (array_key_exists("DataIncomplete",$param) and $param["DataIncomplete"] !== null) {
            $this->DataIncomplete = $param["DataIncomplete"];
        }

        if (array_key_exists("LastCalcTime",$param) and $param["LastCalcTime"] !== null) {
            $this->LastCalcTime = $param["LastCalcTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
