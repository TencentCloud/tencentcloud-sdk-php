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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCptList返回参数结构体
 *
 * @method array getCptDataList() 获取cpt数据集合
 * @method void setCptDataList(array $CptDataList) 设置cpt数据集合
 * @method integer getAllCount() 获取凭证模板总数
 * @method void setAllCount(integer $AllCount) 设置凭证模板总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetCptListResponse extends AbstractModel
{
    /**
     * @var array cpt数据集合
     */
    public $CptDataList;

    /**
     * @var integer 凭证模板总数
     */
    public $AllCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CptDataList cpt数据集合
     * @param integer $AllCount 凭证模板总数
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
        if (array_key_exists("CptDataList",$param) and $param["CptDataList"] !== null) {
            $this->CptDataList = [];
            foreach ($param["CptDataList"] as $key => $value){
                $obj = new CptListData();
                $obj->deserialize($value);
                array_push($this->CptDataList, $obj);
            }
        }

        if (array_key_exists("AllCount",$param) and $param["AllCount"] !== null) {
            $this->AllCount = $param["AllCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
