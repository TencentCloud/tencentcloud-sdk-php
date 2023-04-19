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
 * ListTaskJobLogDetail返回参数结构体
 *
 * @method string getContext() 获取下一次分页参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContext(string $Context) 设置下一次分页参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getListOver() 获取是否获取完结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListOver(boolean $ListOver) 设置是否获取完结
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogUrl() 获取日志url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogUrl(string $LogUrl) 设置日志url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListTaskJobLogDetailResponse extends AbstractModel
{
    /**
     * @var string 下一次分页参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Context;

    /**
     * @var boolean 是否获取完结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListOver;

    /**
     * @var array 日志详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var string 日志url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 下一次分页参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ListOver 是否获取完结
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 日志详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogUrl 日志url
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new JobLogResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
