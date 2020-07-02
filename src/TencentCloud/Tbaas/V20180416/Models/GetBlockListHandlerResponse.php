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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetBlockListHandler返回参数结构体
 *
 * @method integer getTotalCount() 获取总记录数
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
 * @method string getGroupPk() 获取当前群组编号
 * @method void setGroupPk(string $GroupPk) 设置当前群组编号
 * @method array getList() 获取返回数据列表
 * @method void setList(array $List) 设置返回数据列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetBlockListHandlerResponse extends AbstractModel
{
    /**
     * @var integer 总记录数
     */
    public $TotalCount;

    /**
     * @var string 当前群组编号
     */
    public $GroupPk;

    /**
     * @var array 返回数据列表
     */
    public $List;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总记录数
     * @param string $GroupPk 当前群组编号
     * @param array $List 返回数据列表
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
        if (array_key_exists('TotalCount',$param) and $param['TotalCount'] !== null) {
            $this->TotalCount = $param['TotalCount'];
        }

        if (array_key_exists('GroupPk',$param) and $param['GroupPk'] !== null) {
            $this->GroupPk = $param['GroupPk'];
        }

        if (array_key_exists('List',$param) and $param['List'] !== null) {
            $this->List = [];
            foreach ($param['List'] as $key => $value){
                $obj = new BcosBlockObj();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
