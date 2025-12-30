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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志列表
 *
 * @method integer getTotalCount() 获取总条数
 * @method void setTotalCount(integer $TotalCount) 设置总条数
 * @method array getContent() 获取业务日志列表
 * @method void setContent(array $Content) 设置业务日志列表
 * @method string getScrollId() 获取游标ID
 * @method void setScrollId(string $ScrollId) 设置游标ID
 * @method string getStatus() 获取查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常
 * @method void setStatus(string $Status) 设置查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常
 * @method array getSearchAfter() 获取查询es时，使用searchAfter返回的游标
 * @method void setSearchAfter(array $SearchAfter) 设置查询es时，使用searchAfter返回的游标
 */
class TsfPageBusinessLogV2 extends AbstractModel
{
    /**
     * @var integer 总条数
     */
    public $TotalCount;

    /**
     * @var array 业务日志列表
     */
    public $Content;

    /**
     * @var string 游标ID
     */
    public $ScrollId;

    /**
     * @var string 查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常
     */
    public $Status;

    /**
     * @var array 查询es时，使用searchAfter返回的游标
     */
    public $SearchAfter;

    /**
     * @param integer $TotalCount 总条数
     * @param array $Content 业务日志列表
     * @param string $ScrollId 游标ID
     * @param string $Status 查询状态，SUCCESS：查询成功完成，ERROR_RANGE_EXCEED：查询范围过大异常，ERROR_COMPLEX_CONDITION：查询条件复杂异常，ERROR_OTHER_CAUSE：其他异常
     * @param array $SearchAfter 查询es时，使用searchAfter返回的游标
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new BusinessLogV2();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }
    }
}
