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
 * 审批步骤
 *
 * @method array getApproverUinSet() 获取审批人列表
 * @method void setApproverUinSet(array $ApproverUinSet) 设置审批人列表
 * @method string getApproverUin() 获取审批人
 * @method void setApproverUin(string $ApproverUin) 设置审批人
 * @method integer getStatus() 获取审批状态  0-未审批 1-通过 2-拒绝
 * @method void setStatus(integer $Status) 设置审批状态  0-未审批 1-通过 2-拒绝
 * @method string getComment() 获取审批意见
 * @method void setComment(string $Comment) 设置审批意见
 * @method string getApproveTime() 获取审批时间。
 * @method void setApproveTime(string $ApproveTime) 设置审批时间。
 */
class DspmApproverStep extends AbstractModel
{
    /**
     * @var array 审批人列表
     */
    public $ApproverUinSet;

    /**
     * @var string 审批人
     */
    public $ApproverUin;

    /**
     * @var integer 审批状态  0-未审批 1-通过 2-拒绝
     */
    public $Status;

    /**
     * @var string 审批意见
     */
    public $Comment;

    /**
     * @var string 审批时间。
     */
    public $ApproveTime;

    /**
     * @param array $ApproverUinSet 审批人列表
     * @param string $ApproverUin 审批人
     * @param integer $Status 审批状态  0-未审批 1-通过 2-拒绝
     * @param string $Comment 审批意见
     * @param string $ApproveTime 审批时间。
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
        if (array_key_exists("ApproverUinSet",$param) and $param["ApproverUinSet"] !== null) {
            $this->ApproverUinSet = [];
            foreach ($param["ApproverUinSet"] as $key => $value){
                $obj = new DspmUinUser();
                $obj->deserialize($value);
                array_push($this->ApproverUinSet, $obj);
            }
        }

        if (array_key_exists("ApproverUin",$param) and $param["ApproverUin"] !== null) {
            $this->ApproverUin = $param["ApproverUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }
    }
}
