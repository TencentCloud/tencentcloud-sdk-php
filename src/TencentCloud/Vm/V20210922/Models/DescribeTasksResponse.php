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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks返回参数结构体
 *
 * @method string getTotal() 获取该字段用于返回当前查询的任务总量，格式为int字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置该字段用于返回当前查询的任务总量，格式为int字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取该字段用于返回当前页的任务详细数据，具体输出内容请参见TaskData数据结构的详细描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置该字段用于返回当前页的任务详细数据，具体输出内容请参见TaskData数据结构的详细描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageToken() 获取该字段用于返回翻页时使用的Token信息，由系统自动生成，并在翻页时向下一个生成的页面传递此参数，以方便快速翻页功能的实现。当到最后一页时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageToken(string $PageToken) 设置该字段用于返回翻页时使用的Token信息，由系统自动生成，并在翻页时向下一个生成的页面传递此参数，以方便快速翻页功能的实现。当到最后一页时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTasksResponse extends AbstractModel
{
    /**
     * @var string 该字段用于返回当前查询的任务总量，格式为int字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 该字段用于返回当前页的任务详细数据，具体输出内容请参见TaskData数据结构的详细描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 该字段用于返回翻页时使用的Token信息，由系统自动生成，并在翻页时向下一个生成的页面传递此参数，以方便快速翻页功能的实现。当到最后一页时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Total 该字段用于返回当前查询的任务总量，格式为int字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 该字段用于返回当前页的任务详细数据，具体输出内容请参见TaskData数据结构的详细描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageToken 该字段用于返回翻页时使用的Token信息，由系统自动生成，并在翻页时向下一个生成的页面传递此参数，以方便快速翻页功能的实现。当到最后一页时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TaskData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
