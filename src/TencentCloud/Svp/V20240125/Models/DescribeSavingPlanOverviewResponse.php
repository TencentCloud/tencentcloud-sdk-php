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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSavingPlanOverview返回参数结构体
 *
 * @method array getOverviews() 获取节省计划总览明细数据	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverviews(array $Overviews) 设置节省计划总览明细数据	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取查询命中的节省计划总览明细数据总条数
 * @method void setTotal(integer $Total) 设置查询命中的节省计划总览明细数据总条数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSavingPlanOverviewResponse extends AbstractModel
{
    /**
     * @var array 节省计划总览明细数据	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Overviews;

    /**
     * @var integer 查询命中的节省计划总览明细数据总条数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Overviews 节省计划总览明细数据	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 查询命中的节省计划总览明细数据总条数
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
        if (array_key_exists("Overviews",$param) and $param["Overviews"] !== null) {
            $this->Overviews = [];
            foreach ($param["Overviews"] as $key => $value){
                $obj = new SavingPlanOverviewDetail();
                $obj->deserialize($value);
                array_push($this->Overviews, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
