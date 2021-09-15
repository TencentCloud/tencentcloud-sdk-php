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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckMobileAndName返回参数结构体
 *
 * @method integer getResult() 获取检测结果
计费结果码：
  0:  验证结果一致
  1:  手机号未实名
  2:  姓名和手机号不一致
  3:  信息不一致(手机号已实名,但姓名和身份证号与实名信息不一致)
不收费结果码:
  101: 查无记录
  102: 非法姓名(长度,格式等不正确)
  103: 非法手机号(长度,格式等不正确)
  104: 非法身份证号(长度,校验位等不正确)
  105: 认证未通过
  106: 验证平台异常
 * @method void setResult(integer $Result) 设置检测结果
计费结果码：
  0:  验证结果一致
  1:  手机号未实名
  2:  姓名和手机号不一致
  3:  信息不一致(手机号已实名,但姓名和身份证号与实名信息不一致)
不收费结果码:
  101: 查无记录
  102: 非法姓名(长度,格式等不正确)
  103: 非法手机号(长度,格式等不正确)
  104: 非法身份证号(长度,校验位等不正确)
  105: 认证未通过
  106: 验证平台异常
 * @method string getDescription() 获取结果描述; 未通过时必选
 * @method void setDescription(string $Description) 设置结果描述; 未通过时必选
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckMobileAndNameResponse extends AbstractModel
{
    /**
     * @var integer 检测结果
计费结果码：
  0:  验证结果一致
  1:  手机号未实名
  2:  姓名和手机号不一致
  3:  信息不一致(手机号已实名,但姓名和身份证号与实名信息不一致)
不收费结果码:
  101: 查无记录
  102: 非法姓名(长度,格式等不正确)
  103: 非法手机号(长度,格式等不正确)
  104: 非法身份证号(长度,校验位等不正确)
  105: 认证未通过
  106: 验证平台异常
     */
    public $Result;

    /**
     * @var string 结果描述; 未通过时必选
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Result 检测结果
计费结果码：
  0:  验证结果一致
  1:  手机号未实名
  2:  姓名和手机号不一致
  3:  信息不一致(手机号已实名,但姓名和身份证号与实名信息不一致)
不收费结果码:
  101: 查无记录
  102: 非法姓名(长度,格式等不正确)
  103: 非法手机号(长度,格式等不正确)
  104: 非法身份证号(长度,校验位等不正确)
  105: 认证未通过
  106: 验证平台异常
     * @param string $Description 结果描述; 未通过时必选
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
