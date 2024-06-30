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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTWeCallPkgList返回参数结构体
 *
 * @method array getTWeCallPkgList() 获取激活状态
 * @method void setTWeCallPkgList(array $TWeCallPkgList) 设置激活状态
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method array getTWeCallCategoryPkgList() 获取分类统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTWeCallCategoryPkgList(array $TWeCallCategoryPkgList) 设置分类统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetTWeCallPkgListResponse extends AbstractModel
{
    /**
     * @var array 激活状态
     */
    public $TWeCallPkgList;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var array 分类统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TWeCallCategoryPkgList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TWeCallPkgList 激活状态
     * @param integer $Total 总数
     * @param array $TWeCallCategoryPkgList 分类统计
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TWeCallPkgList",$param) and $param["TWeCallPkgList"] !== null) {
            $this->TWeCallPkgList = [];
            foreach ($param["TWeCallPkgList"] as $key => $value){
                $obj = new TWeCallPkgInfo();
                $obj->deserialize($value);
                array_push($this->TWeCallPkgList, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TWeCallCategoryPkgList",$param) and $param["TWeCallCategoryPkgList"] !== null) {
            $this->TWeCallCategoryPkgList = [];
            foreach ($param["TWeCallCategoryPkgList"] as $key => $value){
                $obj = new TWeCallCategoryPkgInfo();
                $obj->deserialize($value);
                array_push($this->TWeCallCategoryPkgList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
